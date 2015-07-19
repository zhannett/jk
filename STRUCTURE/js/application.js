/*
    This javascript is the main javascript for the sites actions.
*/
var JK = window.JK || {};  // set up a master object
//  set up some objects within the master one, to hold my functions and behaviors
JK.Behaviors = {};
JK.Functions = {};
// look through the document (or ajax'd in content if "context" is defined) to look for "data-behavior" attributes.
// Initialize a new instance of the method if found, passing through the element that had the attribute
// So in this example it will find 'data-behavior="show_articles"' and run the show_articles method.
JK.LoadBehavior = function(context) {
    if (context === indefined) {
        context = $(document);
    }
    context.find("*[data-behavior]").each(function() {
        var that = $(this),
            behaviors = that.attr('data-behavior');
        $.each(behaviors.split(" "), function(index, behaviorName) {
            try {
                var BehaviorClass = JK.Behaviors[behaviorName],
                    initializedBehavior = new BehaviorClass(that);
            }
            catch(e) {
                // No Operation
            }
        });
    });
};
// set up and trigger looking for the behaviors on DOM ready
JK.onReady = function() {
    JK.LoadBehavior();
};
$(document).ready( function() {
    JK.onReady();
});


/*
 *AJAX - JK.LoadBehavior($('#ajaxed'));
 *
 *Call Slider from different behavior:
 *JK.Behaviors.slider($('#newElementNeedsSlider'));
 *
 *MAke methods and properties inside Behavior globaL
 *JK.Behavior.slider.active = true;
 *
 *
 *get/set
 *JK.Behaviors.slider = function(container) {
    var slide_amount: 13;
    JK.Behvior.slider.setSlideAmount = function(amount) {
        slide_amount = amount;
    }
    JK.Behaviors.slider.getSlideAmount = function() {
        return slide_amount;
    }
 }
 
 => Globally update and retrieve a private variable to the method:
 JK.Behaviors.slider.setSlideAmout(!#!@);
 JK.Behaviors.slider.getSlideAmunt();
 
 Alternatives:
 1. Adding to top-level object:   JK.version = '1.3.2.3';
 or 2. JK.error = function(msg) {
    alert('error! ' + msg);
 };
 
 
 HTML:
 <section id="" data-behavior="slider">.....</section>
 *
 *
 **/