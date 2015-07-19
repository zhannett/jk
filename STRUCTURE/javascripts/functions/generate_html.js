m1312.Functions.generate_html = function(template_str,articles_obj){
  
  // some set up vars and compiling the dust template
  var generated_html = "", 
      template_compiled = dust.compile(template_str,"article_template");
  dust.loadSource(template_compiled);

  // render the template
  dust.render("article_template", articles_obj, function(err, out) {  
    if (!err) {
      generated_html = out;
    } else {
      generated_html = "<p>error!</p>";
    }
  });
  // return the generated html, in this example, back to show articles.js
  return generated_html;

};