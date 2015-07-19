var JK = window.JK || {};
JK.Behaviors = {};
JK.Functions = {};
JK.LoadBehavior = function(context) {
    if (context === undefined) {
        context = $(document);
    }
    context.find("*[data-behavior]").each(function () {
        var that = $(this),
            behaviors = that.attr('data-behavior');
        $.each(behaviors.split(" "), function(index, behaviorName) {
            try {
               //alert('BehaviorClass = ' + behaviorName + ' ' + ' ' + JK.Behaviors[behaviorName]);
               var BehaviorClass = JK.Behaviors[behaviorName],
                   initializedBehavior = new BehaviorClass(that);
            }
            catch(e) {
                //NO Operation
                //alert('Error!!!');
            }
        });
    });
};
JK.onReady = function () {
    JK.LoadBehavior();
};
$(document).ready(function () {
    JK.onReady();
});