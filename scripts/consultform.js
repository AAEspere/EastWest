$(document).ready(function(){
            var form = $("#consultForm").show();
            
            form.steps({
                headerTag: "h2",
                bodyTag: "fieldset",
                transitionEffect: "slideLeft",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    if(currentIndex > newIndex) {
                        return true;
                    }
                    if(currentIndex < newIndex) {
                        form.find(".body:eq(" + newIndex + ") label.error").remove();
                        form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
                    }
                    form.validate().settings.ignore = ":disabled,:hidden";
                    return form.valid();
                },
                onFinishing: function (event, currentIndex) {
                    form.validate().settings.ignore = ":disabled";
                    return form.valid();
                },
                onFinished: function(event, currentIndex) {
                    alert("Submitted!");
                }
            }).validate({
                errorPlacement: function errorPlacement(error, element) {
                    element.before(error);
                }
            })
            
        });