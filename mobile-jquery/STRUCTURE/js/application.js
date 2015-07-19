var JK = window.JK || {};
JK.Behaviors = {};
JK.LoadBehavior = function(context) {
    if (context === indefined) {
        context = $(document);
    }
    context.find("*[data-behavior]").each(function() {
        var that = $(this),
            behaviors = that.atr('data-behavior');
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