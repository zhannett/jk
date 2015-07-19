<%@ Page Language="VB" AutoEventWireup="false" CodeFile="Default.aspx.vb" Inherits="_Default" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Untitled Page</title>

    <script src="js/jquery.js" type="text/javascript"></script>
    
    <style type="text/css">
    
    dl, dt, dd, ul, li, a
    {
    margin: 0; padding: 0;
    }
    a
    {
    color: #292929;
    }
    
    li
    {
    list-style-type: none;
    padding-left: .2em;
    }
    dl
    {
    width: 150px;
    }
    dt
    {
    background-color: #faa41a;
    }
    </style>

    <script type="text/javascript">
    $(function()
    {
    $("dd:not(:first)").hide();
 $("dt a").click(function()
    {
    $("dd:visible").slideUp("fast"); 
        $(this).parent("dt").next("dd").slideDown("normal");
    });
    });
    
    
    $("p").animate({
      "opacity": "show"
    }, { "duration": "slow", "easing": "easein" });
    </script>

</head>
<body>
    <form id="form1" runat="server">
    <div>
        <dl>
            <dt><a href=#">Home</a></dt>
            <dd>
                <ul>
                    <li><a href="#">Hello</a></li>
                    <li><a href="#">Hello</a></li>
                    <li><a href="#">Hello</a></li>
                </ul>
            </dd>
            <dt><a href="#">About</a></dt>
            <dd>
                <ul>
                    <li><a href="#">Hello</a></li>
                    <li><a href="#">Hello</a></li>
                    <li><a href="#">Hello</a></li>
                </ul>
            </dd>
            <dt><a href="#">Blog</a></dt>
            <dd>
                <ul>
                    <li><a href="#">Hello</a></li>
                    <li><a href="#">Hello</a></li>
                    <li><a href="#">Hello</a></li>
                </ul>
            </dd>
        </dl>
    </div>
    </form>
</body>
</html>
