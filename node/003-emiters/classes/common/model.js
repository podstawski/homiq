var fs = require('fs');

var instances=[];


var Model = function(file,index,logger) {
    var data=[];
    var lastSave=0;
    var lastSet=0;
    var saveState=false;
    instances[file]=this;
    
    var createIndex = function (data) {
        var idx=[];
        for (var i=0;i<index.length;i++) {
            idx.push(data[index[i]]);
        }
        return idx.join();
    }
    
    this.save = function() {
        if (saveState) return;
        if (lastSave>=lastSet) return;
        saveState=true;
        
        var d=[];
        for (var k in data) d.push(data[k]);
        
        fs.writeFile(file,d,function() {
            saveState=false;
        });
    }
    
    
    return {
        init: function () {
            fs.readFile(file,function(error,d) {    
                try {
                    var json = JSON.parse(d);
                    
                    data=[];
                    for (var i=0;i<json.length;i++) {
                        data[createIndex(json[i])] = json[i];
                    }
                    lastSave=Date.now();
                } catch (e) {
                    logger.log('Data parse error in '+file+', '+e,'init');
                }  
            });
            
        },
        
        set: function(idx,d) {
            if (typeof(data[idx]=='undefined')) return;
            for (var k in d) {
                data[idx][k]=d[k];
            }
            lastSet=Date.now();
        }
        
    }
    
}

var saveModel=function() {
    for (var k in instances) instances[k].save();
}

setTimeout(saveModel,1000);

module.exports = Model;