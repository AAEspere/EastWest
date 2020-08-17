function indexTab(jobName) {
    var i, tabContent;

    tabContent = document.getElementsByClassName("indexTabContent");
    for(i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    }

    document.getElementById(jobName).style.display = "block";
}

document.getElementById("defaultOpen").click();