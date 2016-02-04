'use strict';

goog.provide('Blockly.JavaScript.electronics');

goog.require('Blockly.JavaScript');


Blockly.JavaScript['set_led'] = function(block) {
  // Search the text for a substring.
  var row = block.getFieldValue('row_drop') ;
  var col = block.getFieldValue('col_drop') ;
  var colour = block.getFieldValue('colour_drop') ;


  var code ='set(' + row + ',' + col + ',' + colour +');\n'; 
  return code;
};



Blockly.JavaScript['my_delay'] = function(block) {
  // Search the text for a substring.
  var delay = block.getFieldValue('delay') ;
      

  var code ='delay(' + delay +');\n'; 
  return code;
};


Blockly.JavaScript['my_set1_led'] = function(block) {
  // Operations 'and', 'or'.
  var row = block.getFieldValue('r');
  var col = block.getFieldValue('c');
  var color = block.getFieldValue('color');
  var code = "set(" + row + "," + col + "," + color + ");\n"
    return code ;
};




