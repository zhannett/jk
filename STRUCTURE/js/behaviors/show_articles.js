JK.Behaviors.show_articles = function(container){
  
  // some set up vars
  var template_str,
      articles_obj;  

  // loads in the dust template, on success, triggers loading the json
  $.ajax({
    url: "/javascripts/templates/article_listing.js", 
    dataType: "text", 
    cache: "false", 
    success: function(data) {
      template_str = data;
      load_articles();
    }
  });  
  

  // load the json, on success, triggers displaying the articles
  function load_articles(){
    $.getJSON("/javascripts/json/articles.json", function(data) {
      articles_obj = {"articles": data};
      display_articles();
    });
  }
  
  function display_articles(){
    // generates the html by passing off to another function, /js/functions/generate_html.js
    var generated_html = JK.Functions.generate_html(template_str,articles_obj);
    // container is the element that had the data-attribute, it is passed through from application.js when initializing the behavior
    container.html(generated_html); 
  }

};