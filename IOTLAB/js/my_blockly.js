var workspace = Blockly.inject('blocklyDiv',
              {media: 'block/media/',
              toolbox: document.getElementById('toolbox')});
  

              
                  function showCode() 
    {
      // Generate JavaScript code and display it.
      Blockly.JavaScript.INFINITE_LOOP_TRAP = null;
      var code = Blockly.JavaScript.workspaceToCode(workspace);
      
      if(window.XMLHttpRequest)
      {
        xhr = new XMLHttpRequest();
      }
      else
      {
        xhr = new ActiveObject('Microsoft.XMLHTTP');
      }

      if(xhr)
      {
        alert('uploading code'+code);
        xhr.open("GET",'http://www.hackincloud.com/block/demos/generator/my_php.php?my_data='+code, true);
        xhr.send();

        
      }
      else
      {
        alert('php not ready');
      }
  
    

    }


    function showCode1() 
    {
      // Generate JavaScript code and display it.
      Blockly.JavaScript.INFINITE_LOOP_TRAP = null;
      var code = Blockly.Arduino.workspaceToCode();
      
      if(window.XMLHttpRequest)
      {
        xhr = new XMLHttpRequest();
      }
      else
      {
        xhr = new ActiveObject('Microsoft.XMLHTTP');
      }
      if(xhr)
      {
        
        xhr.open("GET",'http://www.hackincloud.com/block/demos/generator/my_php.php?my_data='+code, true);
        xhr.send();

        
      }
      else
      {
        alert('php not ready');
      }
  
    

    }


    function showCode2() 
    {
      // Generate JavaScript code and display it.
      Blockly.JavaScript.INFINITE_LOOP_TRAP = null;
      var code = Blockly.JavaScript.workspaceToCode(workspace);
      
      if(window.XMLHttpRequest)
      {
        xhr = new XMLHttpRequest();
      }
      else
      {
        xhr = new ActiveObject('Microsoft.XMLHTTP');
      }

      if(xhr)
      {
        alert('uploading code'+code);
        xhr.open("GET",'http://www.hackincloud.com/block/demos/generator/my_php.php?my_data='+code, true);
        xhr.send();

        
      }
      else
      {
        alert('php not ready');
      }
  
    

    }



    function discard() {
  var count = Blockly.mainWorkspace.getAllBlocks().length;
  if (count < 2 || window.confirm('Delete all ' + count + ' blocks?')) {
    Blockly.mainWorkspace.clear();
    
  }
}

function saveCode() {
  var fileName = window.prompt('What would you like to name your file?', 'BlocklyDuino')
  //doesn't save if the user quits the save prompt
  if(fileName){
    var blob = new Blob([Blockly.Arduino.workspaceToCode()], {type: 'text/plain;charset=utf-8'});
    saveAs(blob, fileName + '.ino');
  }
}
    
    function save() {
  var xml = Blockly.Xml.workspaceToDom(Blockly.mainWorkspace);
  var data = Blockly.Xml.domToText(xml);
  var fileName = window.prompt('What would you like to name your file?', 'BlocklyDuino');
  // Store data in blob.
  // var builder = new BlobBuilder();
  // builder.append(data);
  // saveAs(builder.getBlob('text/plain;charset=utf-8'), 'blockduino.xml');
  if(fileName){
    var blob = new Blob([data], {type: 'text/xml'});
    saveAs(blob, fileName + ".xml");
  } 
}


function show() 
    {
      // Generate JavaScript code and display it.
      Blockly.JavaScript.INFINITE_LOOP_TRAP = null;
      var code = Blockly.Arduino.workspaceToCode();
      alert(code);

    }
    


    function load(event) 
    {
      var files = event.target.files;
  // Only allow uploading one file.
  if (files.length != 1) {
    return;
  }

  // FileReader
  var reader = new FileReader();
  reader.onloadend = function(event) {
    var target = event.target;
    // 2 == FileReader.DONE
    if (target.readyState == 2) {
      try {
        var xml = Blockly.Xml.textToDom(target.result);
      } catch (e) {
        alert('Error parsing XML:\n' + e);
        return;
      }
      var count = Blockly.mainWorkspace.getAllBlocks().length;
      if (count && confirm('Replace existing blocks?\n"Cancel" will merge.')) {
        Blockly.mainWorkspace.clear();
      }
      Blockly.Xml.domToWorkspace(Blockly.mainWorkspace, xml);
    }
    // Reset value of input after loading because Chrome will not fire
    // a 'change' event if the same file is loaded again.
    document.getElementById('load').value = '';
  };
  reader.readAsText(files[0]);
}


function auto_save_and_restore_blocks() {
  // Restore saved blocks in a separate thread so that subsequent
  // initialization is not affected from a failed load.
  
  // Init load event.
  var loadInput = document.getElementById('load');
  loadInput.addEventListener('change', load, false);
  document.getElementById('fakeload').onclick = function() {
    loadInput.click();
  };
}

function copy() {

  Blockly.JavaScript.INFINITE_LOOP_TRAP = null;
  var code = Blockly.Arduino.workspaceToCode();
      
  window.prompt("PRESS: Ctrl+C, Enter", code);
}
