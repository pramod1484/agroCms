
var app_root = ""; // Nov 22 '09 - removed /cs; old -- for prod change to /cs  (don't add trailing backslash)

// requires id of the element
function clearError(obj) {
    $("#" + obj).removeClass("error");
}
function validateText(jqObj) {
    var good = true;
    if (jqObj.val() == "" || jqObj.val() <= 0)
    { jqObj.addClass("error"); good = false; }
    else
        jqObj.removeClass("error");
    return good;
}
function validateRadio(jqObj) {
    var good = true;
    if (jqObj.find("input[@checked]").is(":checked") == false)
    { jqObj.addClass("error"); good = false; }
    else
        jqObj.removeClass("error");
    return good;
}
function validateTextUsingID(id) {
    var good = true;
    var jqObj = $("#" + id);
    if (jqObj.val() == "" || jqObj.val() <= 0)
    { jqObj.addClass("error"); good = false; }
    else
        jqObj.removeClass("error");
    return good;
}
function validateRadioUsingID(id) {
    var good = true;
    var jqObj = $("#" + id);
    if (jqObj.find("input[@checked]").is(":checked") == false)
    { jqObj.addClass("error"); good = false; }
    else
        jqObj.removeClass("error");
    return good;
}
function validateDropDown(jqObj) {
    var good = true;
    if (jqObj.val() == "-1" || jqObj.val() == "--Select State--")
    { jqObj.addClass("error"); good = false; }
    else
        jqObj.removeClass("error");
    return good;
}
function validateDropDownUsingID(id) {
    var good = true;
    var jqObj = $("#" + id);
    if (jqObj.val() == "-1" || jqObj.val() == "--Select State--")
    { jqObj.addClass("error"); good = false; }
    else
        jqObj.removeClass("error");
    return good;
}
function _validate() {
    var allGood = true;
    allGood = validateSalary();
    if (allGood == true)
        allGood = validateType();
    return allGood;
}
// disables button (presumably on click) and re-enables it (to do: use jquery controls to toggle)
function toggleButton(btnId, val, disable) {
    if (disable == true)
        $("#" + btnId).attr("value", val).attr("disabled", "disabled");
    else
        $("#" + btnId).attr("value", val).removeAttr("disabled");
}
function widgetSend(url, wsData, validatorFn, successFn, errorFn, btnId) {
    if (validatorFn() == true) {
        // disable button while we calculate
        //$("[id$=calcbutton]").attr("value", "Calculating...").attr("disabled", "disabled");
        toggleButton(btnId, "Calculating...", true);

        // sendAjaxRequest(ws url, data, onsuccessfn, onerrorfn)
        widget_sendAjaxRequest(url, wsData, successFn, errorFn, btnId);
       //console.log("email url from Tax Calculator Widget:" +url); Returns NAN
    }
}



function widget_sendAjaxRequest(url, wsData, successFn, errorFn, btnId) {
    setTimeout(function () {
        $.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: app_root + '/themes/yogi/WebServices/' + url,
            data: wsData,
            dataType: "json",
            success:
                function (data) {
                    var myObj;
                    if (data.hasOwnProperty("d")) {

                        myObj = data["d"];
                    } else {

                        myObj = data;
                    }

                    widget_onSuccess(successFn, myObj, btnId);
                    // why not do the onSuccess tasks here?
                },
            error:
                function (XMLHttpRequest, textStatus, errorThrown) {
                    widget_onError(XMLHttpRequest, textStatus, errorThrown);

                }
        });
    }, "1");
}
function widget_onSuccess(successFn, rsp, btnId) {
    // $("[id$=calcbutton]").attr("value", "Calculate").removeAttr("disabled");
    toggleButton(btnId, "Calculate", false);
    successFn(rsp);
}

function sendEmail_onSucess(onSucessEmailFn, rsp) {
    onSucessEmailFn(rsp);
}

function sendEmail_onError(XMLHttpRequest, textStatus, errorThrown) {
    $("#Message").removeClass("msgalert").addClass("erroralert").text("Oops! Please try again.");
    $("#Message").show("fast");
}

function widget_onError(XMLHttpRequest, textStatus, errorThrown, btnId) {
    //$("[id$=calcbutton]").attr("value", "Calculate").removeAttr("disabled");
    toggleButton(btnId, "Calculate", false);
    errorFn(XMLHttpRequest, textStatus, errorThrown);
}
function widget_WatermarkFocus(txtElem, strWatermark) {
    if (txtElem.value == strWatermark)
        txtElem.value = '';
}
function widget_WatermarkBlur(txtElem, strWatermark) {
    if (txtElem.value == '')
        txtElem.value = strWatermark;
}
function widget_checkKey(evt) {
    var keyCode = (window.event) ? evt.keyCode : evt.which;

    if ((keyCode > 47 && keyCode < 58) || (keyCode == 0) || (keyCode == 8)) return true;
    else {
        if (!window.event) evt.preventDefault();
        else return false;
    }
}
function widget_checkdecimalKey(evt) {
    var keyCode = (window.event) ? evt.keyCode : evt.which;

    if ((keyCode > 47 && keyCode < 58) || (keyCode == 0) || (keyCode == 8) || (evt.which == 46)) return true;
    else {
        if (!window.event) evt.preventDefault();
        else return false;
    }
}

// This function formats numbers by adding commas, prefix, etc.
function numberFormat(nStr, prefix) {
    var prefix = prefix || '';
    nStr += '';
    var x = nStr.split('.');
    var x1 = x[0];
    var x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1))
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    return prefix + x1 + x2;
}

function validateEmail(jqObj) {
    var good = true;
    var email = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    if (jqObj.val() != "") {
        var matchResult = jqObj.val().match(email);
        if (matchResult == null)
        { jqObj.addClass("error"); good = false; }
        else
        { jqObj.removeClass("error"); }
    }
    else
    { jqObj.addClass("error"); good = false; }
    return good;
}
function validatePhone(jqObj) {
    var good = true;
    var mobileNum = /^((\+)?(\d{2}[-]))?(\d{10}){1}?$/;
    if (jqObj.val() != "") {
        var matchResult = jqObj.val().match(mobileNum);
        if (matchResult == null)
        { jqObj.addClass("error"); good = false; }
        else
        { jqObj.removeClass("error"); }
    }
    else
    { jqObj.addClass("error"); good = false; }
    return good;
}
function validateRegularExpression(jqObj, matchTo) {
    var good = true;
    if (jqObj.val() != "") {
        var matchResult = jqObj.val().match(matchTo);
        if (matchResult == null)
        { jqObj.addClass("error"); good = false; }
        else
        { jqObj.removeClass("error"); }
    }
    else
    { jqObj.addClass("error"); good = false; }
    return good;
}
function validateNonMandatoryExpression(jqObj, matchTo) {
    var good = true;
    if (jqObj.val() != "") {
        var matchResult = jqObj.val().match(matchTo);
        if (matchResult == null)
        { jqObj.addClass("error"); good = false; }
        else
        { jqObj.removeClass("error"); }
    }
    return good;
}
