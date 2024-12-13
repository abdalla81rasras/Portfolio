function  Search()
{
    var Search = document.getElementById("search").value;

    if(Search.toLowerCase() == "add about"){
        location.href = "Add_about.php";
        return false;
    }else if(Search.toLowerCase() == "view about"){
        location.href = "View_about.php";
        return false;
    }else if(Search.toLowerCase() == "add contact"){
        location.href = "Add_contact.php";
        return false;
    }else if(Search.toLowerCase() == "view contact"){
        location.href = "View_contact.php";
        return false;
    }else if(Search.toLowerCase() == "add feedback"){
        location.href = "Add_feedback.php";
        return false;
    }else if(Search.toLowerCase() == "view feedback"){
        location.href = "View_feedback.php";
        return false;
    }else if(Search.toLowerCase() == "add footer"){
        location.href = "Add_footer.php";
        return false;
    }else if(Search.toLowerCase() == "view footer"){
        location.href = "View_footer.php";
        return false;
    }else if(Search.toLowerCase() == "add header"){
        location.href = "Add_header.php";
        return false;
    }else if(Search.toLowerCase() == "view header"){
        location.href = "View_header.php";
        return false;
    }else if(Search.toLowerCase() == "add home"){
        location.href = "Add_home.php";
        return false;
    }else if(Search.toLowerCase() == "view home"){
        location.href = "View_home.php";
        return false;
    }else if(Search.toLowerCase() == "add images under about"){
        location.href = "Add_imges_underabout.php";
        return false;
    }else if(Search.toLowerCase() == "view images under about"){
        location.href = "View_imges_underabout.php";
        return false;
    }else if(Search.toLowerCase() == "add portfolio"){
        location.href = "Add_portfolio.php";
        return false;
    }else if(Search.toLowerCase() == "view ortfolio"){
        location.href = "View_portfolio.php";
        return false;
    }else if(Search.toLowerCase() == "add service"){
        location.href = "Add_service.php";
        return false;
    }else if(Search.toLowerCase() == "view service"){
        location.href = "View_service.php";
        return false;
    }else if(Search.toLowerCase() == "add under about"){
        location.href = "Add_underabout.php";
        return false;
    }else if(Search.toLowerCase() == "view under about"){
        location.href = "View_underabout.php";
        return false;
    }else {
       alert("not found page !")
    }
}