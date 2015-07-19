/*

	13twelve vs. jQuery

	This javascript is the main javascript for the sites actions.

*/

// --------------------------------------------------------------------------------------------------------------

// set up a master object
var m1312 = window.m1312 || {};

// set up some objects within the master one, to hold my functions and behaviors
m1312.Behaviors = {
}
m1312.Functions = {
}

// look through the document (or ajax'd in content if "context" is defined) to look for "data-behavior" attributes.
// Initialize a new instance of the method if found, passing through the element that had the attribute
// So in this example it will find 'data-behavior="show_articles"' and run the show_articles method.
m1312.LoadBehavior = function(context){
  if(context === undefined){
    context = $(document);
  }

  context.find("*[data-behavior]").each(function(){
    var that = $(this);
    var behaviors = that.attr('data-behavior');

    $.each(behaviors.split(" "), function(index,behaviorName){
      try {
        var BehaviorClass = m1312.Behaviors[behaviorName];
        var initializedBehavior = new BehaviorClass(that);
      }
      catch(e){
        // No Operation
      }
    });
  });
};

// set up and trigger looking for the behaviors on DOM ready
m1312.onReady = function(){
  m1312.LoadBehavior();
};

$(document).ready(function(){
  m1312.onReady();
});