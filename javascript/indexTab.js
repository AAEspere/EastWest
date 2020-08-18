function indexTab(jobName, element) {
    var i, tabContent;

    tabContent = document.getElementsByClassName("indexTabContent");
    for(i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    }

    document.getElementById(jobName).style.display = "block";
    //document.querySelector('button.indexTabs').removeAttribute('id');
    document.querySelector(element).id = "defaultOpen"
}

document.getElementById("defaultOpen").click();