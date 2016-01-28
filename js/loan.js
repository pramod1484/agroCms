// JScript File

function roundNumber(num, dec) {
    var result = Math.round(num * Math.pow(10, dec)) / Math.pow(10, dec);
    return result;
}


// Start Js For Annuity Calculator
var AC_deposits = null, AC_Rate = null, AC_Period = null;
var CAGR_InitialValue = null, CAGR_MaturityValue = null, CAGR_Period = null, CAGR_compounding = null, CAGR_Result = null;
var FR_Monthly = null, FR_Rate = null, FR_Period = null;
var MVRD_deposits = null, MVRD_Rate = null, MVRD_Period = null, MVRD_compounding = null, MVRD_MaturityValue = null;
var MVTD_deposits = null, MVTD_Rate = null, MVTD_Period = null, MVTD_compounding = null, MVTD_MaturityValue = null;
var HLE_LoanAmount = null, HLE_Rate = null, HLE_Period = null, HLE_Result = null;
var SIP_InitialInvestment = null, SIP_Rate = null, SIP_Monthly = null, SIP_Period = null, SIP_FutureValue = null, SIP_Appreciation = null;
var MSIP_InitialInvestment = null, MSIP_Rate = null, MSIP_Period = null, MSIP_AmountPerMonthResult = null;
var Inflation_MonthlyExp = null, Inflation_InfRate = null, Inflation_Period = null, Inflation_FutureVal = null;
var PP_MonthlyExp = null, PP_InfRate = null, PP_Period = null, PP_purchasepower = null;

$(document).ready(function () {
    AC_deposits = $("#InitialInvestmentAC");
    AC_Rate = $("#RateOfReturnAC");
    AC_Period = $("#periodAC");

    AC_deposits.blur(function () {
        validateText($(this));
    });
    AC_Rate.blur(function () {
        validateText($(this));
    });
    AC_Period.blur(function () {
        validateText($(this));
    });

    CAGR_InitialValue = $("#IntialValueCAGR");
    CAGR_MaturityValue = $("#MaturityValueCAGR");
    CAGR_Period = $("#DurationInYearsCAGR");
    //CAGR_compounding = $("#InterstCompoundingCAGR");
    CAGR_Result = $("#CAGRValue");


    CAGR_InitialValue.blur(function () {
        validateText($(this));
    });
    CAGR_MaturityValue.blur(function () {
        validateText($(this));
    });
    CAGR_Period.blur(function () {
        validateText($(this));
    });

    FR_Rate = $("#RateOfReturnFRSIP"); //R
    FR_Monthly = $("#MonthlyInvestmentFRSIP"); //I
    FR_Period = $("#periodFRSIP"); //n


    FR_Monthly.blur(function () {
        validateText($(this));
    });
    FR_Rate.blur(function () {
        validateText($(this));
    });
    FR_Period.blur(function () {
        validateText($(this));
    });

    MVRD_deposits = $("#AmountInvestedPerMonthRD");
    MVRD_Rate = $("#RateOfInterestRD");
    MVRD_Period = $("#periodRD");
    MVRD_compounding = $("#InterstCompoundingRD");
    MVRD_MaturityValue = $("#MaturityValueRD");

    MVRD_deposits.blur(function () {
        validateText($(this));
    });
    MVRD_Rate.blur(function () {
        validateText($(this));
    });
    MVRD_Period.blur(function () {
        validateText($(this));
    });

    MVTD_deposits = $("#FixedAmountInvestedTD");
    MVTD_Rate = $("#RateOfInterestTD");
    MVTD_Period = $("#PeriodTD");
    MVTD_compounding = $("#InterstCompoundingTD");
    MVTD_MaturityValue = $("#MaturityValueTD");

    MVTD_deposits.blur(function () {
        validateText($(this));
    });
    MVTD_Rate.blur(function () {
        validateText($(this));
    });
    MVTD_Period.blur(function () {
        validateText($(this));
    });

    HLE_LoanAmount = $("#LoanAmountHME");
    HLE_Rate = $("#RateHME");
    HLE_Period = $("#DurationYrs");
    HLE_Result = $("#EMIAMount");

    HLE_LoanAmount.blur(function () {
        validateText($(this));
    });
    HLE_Rate.blur(function () {
        validateText($(this));
    });
    HLE_Period.blur(function () {
        validateText($(this));
    });

    SIP_InitialInvestment = $("#InitialInvestmentSIP");
    SIP_Rate = $("#RateOfReturnSIP");
    SIP_Monthly = $("#MonthlyInvestmentSIP");
    SIP_Period = $("#periodSIP");
    SIP_FutureValue = $("#FutureValueOfInvestmentSIP");
    SIP_Appreciation = $("#AppreciationSIP");


    SIP_InitialInvestment.blur(function () {
        validateText($(this));
    });
    SIP_Rate.blur(function () {
        validateText($(this));
    });
    SIP_Monthly.blur(function () {
        validateText($(this));
    });
    SIP_Period.blur(function () {
        validateText($(this));
    });

    MSIP_InitialInvestment = $("#AmountEndOfTenureMSIP"); //F2
    MSIP_Rate = $("#RateOfReturnMSIP"); //F3
    MSIP_Period = $("#periodMSIP"); //F1
    MSIP_AmountPerMonthResult = $("#AmountPerMonthMSIP");


    MSIP_InitialInvestment.blur(function () {
        validateText($(this));
    });
    MSIP_Rate.blur(function () {
        validateText($(this));
    });
    MSIP_Period.blur(function () {
        validateText($(this));
    });

    Inflation_MonthlyExp = $("#MonthlyExpenses");
    Inflation_InfRate = $("#InflationRateME");
    Inflation_Period = $("#NumberOfYears");
    Inflation_FutureVal = $("#FutureIncomeME");

    Inflation_MonthlyExp.blur(function () {
        validateText($(this));
    });
    Inflation_InfRate.blur(function () {
        validateText($(this));
    });
    Inflation_Period.blur(function () {
        validateText($(this));
    });

    PP_MonthlyExp = $("#MonthlyExpensesPP");
    PP_InfRate = $("#InflationRatePP");
    PP_Period = $("#NumberOfYearsPP");
    PP_purchasepower = $("#PurchasingPower");

    PP_MonthlyExp.blur(function () {
        validateText($(this));
    });
    PP_InfRate.blur(function () {
        validateText($(this));
    });
    PP_Period.blur(function () {
        validateText($(this));
    });

});
function validateAC() {
    if (validateText(AC_deposits) && validateText(AC_Rate) && validateText(AC_Period))
        return true;
    else
        return false;
}
  //AnnuityCalculator
//  function CalculateAnnuity() {
//    if (validateAC()) {
//        var p = Number(AC_deposits.val());
//        var r = Number(AC_Rate.val()) / 100;
//        var y = Number(AC_Period.val());
//        var total = futureValue(p, r, y - 1) / geomSeries(1 + r, 0, y - 1);
//        if ($("#endOfEachYear").is(":checked") == true)
//            total *= (1 + r);
//        $("#AnnuityAC").val(roundNumber(total, 2));
//        if (y != 0) {
//            $('[id*=ButtonRow]').hide();
//            $('[id*=usercontroldiv]').show();
//            $('[id*=emailcalculationdiv]').show();
//        }
//        
//    }

//}
function futureValue(p, r, y) {
    return p * Math.pow(1 + r, y);
}
function geomSeries(z, m, n) {
    var amt;
    if (z == 1.0) amt = n + 1;
    else amt = (Math.pow(z, n + 1) - 1) / (z - 1);
    if (m >= 1) amt -= geomSeries(z, 0, m - 1);
    return amt;
}
function resetAnnuityCalc() {
    AC_Rate.val(0);
    AC_Period.val(0);
    AC_deposits.val(0);
    $("#AnnuityAC").val('');
}
// End Js For Annuity Calculator

//Start of CAGR
//function validateCAGR() {
//    if (validateText(CAGR_InitialValue) && validateText(CAGR_MaturityValue) && validateText(CAGR_Period))
//        return true;
//    else
//        return false;
//}

//    function CalculateGrowthRateCAGR() {
//    if (validateCAGR()) {
//        var IntialValue = Number(CAGR_InitialValue.val());
//        var MaturityValue = Number(CAGR_MaturityValue.val());
//        var years = Number(CAGR_Period.val());
//        // var depYears=Number(CAGR_compounding.val());
//        var CAGR = roundNumber(((Math.pow((MaturityValue / IntialValue), (1 / years)) - 1) * 100), 2);
//        CAGR_Result.val(CAGR);

//        $('[id*=ButtonRow]').hide();
//        $('[id*=usercontroldiv]').show();
//        $('[id*=emailcalculationdiv]').show();

//    }
//}
function resetCAGR() {
    CAGR_MaturityValue.val(0);
    CAGR_Period.val(0);
    CAGR_InitialValue.val(0);
    CAGR_Result.val('');
}
//End of CAGR

//Start Final Return SIP
function validateFRSIP() {
    if (validateText(FR_Rate) && validateText(FR_Monthly) && validateText(FR_Period))
        return true;
    else
        return false;
}

// function CalculateFRSIP()
//{
//    
//    if (validateFRSIP()) {
//        
//        var Rate = Number(FR_Rate.val()); //R
//        var Monthly = Number(FR_Monthly.val()); //I
//        var Period = Number(FR_Period.val()); //n
//        Monthly = Monthly * 1;
//        Rate = Rate * 0.01;
//        Period /= 12;

//        var tempval = Math.pow((1 + Rate), (Period));
//        var tempval2 = (tempval - 1) / (Math.pow((1 + Rate), (1 / 12)) - 1);

//        var ans = (0 + (Monthly * tempval2));

//        $("#FinalReturnFRSIP").val(roundNumber(ans, 2));

//        $('[id*=ButtonRow]').hide();
//        $('[id*=usercontroldiv]').show();
//        $('[id*=emailcalculationdiv]').show();
//        var FinalReturnFRSIPValue = $('[id*=FinalReturnFRSIP]').val();
//        console.log("FinalReturnFRSIP",  +FinalReturnFRSIPValue);
//    }
//}

//Can remove reset function - Vinay

//function resetFRSIP() {
//    FR_Monthly.val(0);
//    FR_Rate.val(0);
//    FR_Period.val(0);
//    $("#FinalReturnFRSIP").val('');
//}

//End of Final Return SIP

//Start MVRD
function validateRD() {
    if (validateText(MVRD_deposits) && validateText(MVRD_Rate) && validateText(MVRD_Rate))
        return true;
    else
        return false;
}
//Maturityvalueonrecurringdeposit Calc.
// function CalculateMValueOnRecurringDeposit(txt) {
//    if (validateRD()) {
//        
//        var deposits = Number(MVRD_deposits.val());
//        var Rate = Number(MVRD_Rate.val());
//        var periodRD = Number(MVRD_Period.val());
//        var Compounding = Number(MVRD_compounding.val());
//        var year = (periodRD / 12);
//        var interestRate = (Rate / (Compounding));
//        var total = roundNumber(deposits * ((Math.pow((1 + interestRate / 100), (year) * Compounding) - 1) / (1 - Math.pow((1 + interestRate / 100), (-Compounding / 12)))), 2);
//        MVRD_MaturityValue.val(total);

//        var MaturityValue = $("#MaturityValueRD").val();
//        if (MaturityValue > 0) {
//            console.log("MaturityValue", +MaturityValue);
//            $('[id*=ButtonRow]').hide();
//            $('[id*=usercontroldiv]').show();
//            $('[id*=emailcalculationdiv]').show();
//        }
//        if (txt == 1) {
//            for (i = 1; i <= 10; i++) {
//                $("#MaturityValueYearWise" + i).text(roundNumber(deposits * ((Math.pow((1 + interestRate / 100), (i) * Compounding) - 1) / (1 - Math.pow((1 + interestRate / 100), (-Compounding / 12)))), 2));
//            }
//            if (periodRD < 120) $("#MaturityValueYearWise10").text('Not Applicable');
//            if (periodRD < 108) $("#MaturityValueYearWise9").text('Not Applicable');
//            if (periodRD < 96) $("#MaturityValueYearWise8").text('Not Applicable');
//            if (periodRD < 84) $("#MaturityValueYearWise7").text('Not Applicable');
//            if (periodRD < 72) $("#MaturityValueYearWise6").text('Not Applicable');
//            if (periodRD < 60) $("#MaturityValueYearWise5").text('Not Applicable');
//            if (periodRD < 48) $("#MaturityValueYearWise4").text('Not Applicable');
//            if (periodRD < 36) $("#MaturityValueYearWise3").text('Not Applicable');
//            if (periodRD < 24) $("#MaturityValueYearWise2").text('Not Applicable');
//            if (periodRD < 12) $("#MaturityValueYearWise1").text('Not Applicable');
//            $("#yearWiseRD").show();
//            
//        }
//    }
//}

function resetRD() {
    MVRD_deposits.val(0);
    MVRD_Rate.val(0);
    MVRD_Period.val(0);
    MVRD_compounding.val(0);
    MVRD_MaturityValue.val('');
    $("#yearWiseRD").hide();

}


//End of MVRD


//Start of MVTD
//MaturityValueonTermDepositsCalculator
function validateMVTD() {
    if (validateText(MVTD_deposits) && validateText(MVTD_Period) && validateText(MVTD_Rate))
        return true;
    else
        return false;
}
 function CalculateMVOnTermDeposits(txt) {
    if (validateMVTD()) {
        var deposits = Number(MVTD_deposits.val());
        var Rate = Number(MVTD_Rate.val());
        var period = Number(MVTD_Period.val());
        var years = (period / 12);
        var compounding = Number(MVTD_compounding.val());
        var total = roundNumber(deposits * (Math.pow((((compounding * 100) + Rate) / (compounding * 100)), (compounding * years))), 2);
        MVTD_MaturityValue.val(total);
        
        var MarturityValue = $('#MaturityValueTD').val();
        if (MarturityValue > 0) {
            $('[id*=ButtonRow]').hide();
            $('[id*=usercontroldiv]').show();
            $('[id*=emailcalculationdiv]').show();

        }
            
        if (txt == 1) {
            for (i = 1; i <= 10; i++) {
                $("#TDMaturityValueYearWise" + i).text(roundNumber(deposits * (Math.pow((((compounding * 100) + Rate) / (compounding * 100)), (compounding * i))), 2));
            }
            if (period < 120) $("#TDMaturityValueYearWise10").text('Not Applicable');
            if (period < 108) $("#TDMaturityValueYearWise9").text('Not Applicable');
            if (period < 96) $("#TDMaturityValueYearWise8").text('Not Applicable');
            if (period < 84) $("#TDMaturityValueYearWise7").text('Not Applicable');
            if (period < 72) $("#TDMaturityValueYearWise6").text('Not Applicable');
            if (period < 60) $("#TDMaturityValueYearWise5").text('Not Applicable');
            if (period < 48) $("#TDMaturityValueYearWise4").text('Not Applicable');
            if (period < 36) $("#TDMaturityValueYearWise3").text('Not Applicable');
            if (period < 24) $("#TDMaturityValueYearWise2").text('Not Applicable');
            if (period < 12) $("#TDMaturityValueYearWise1").text('Not Applicable');
            $("#yearWiseTD").show();
        }
    }
}
function resetMVOnTermDeposits()//P x (1 + r)^n 
{
    MVTD_deposits.val(0);
    MVTD_Rate.val(0);
    MVTD_Period.val(0);
    $("#InterstCompoundingTD").val(0);
    MVTD_MaturityValue.val('');
    $("#yearWiseTD").hide();
}

//End of MVTD

//HomeloanEMi Calculator.
//Start of Home Loan Emi
//function validateEMI() {

//    if (validateText(HLE_LoanAmount) && validateText(HLE_Rate) && validateText(HLE_Period))
//        return true;
//    else
//        return false;
//}
//function CalculateEMI() {
//    if (validateEMI()) {
//        var LoanAmountHME = Number(HLE_LoanAmount.val());
//        var Rate = Number(HLE_Rate.val());
//        var TotalMonths = Number(HLE_Period.val());
//        var monthlyRate = (Rate / 1200); //as it is compounded Quarterly
//        var EMI = roundNumber(((LoanAmountHME * monthlyRate) * ((Math.pow((1 + monthlyRate), TotalMonths)) / (Math.pow((1 + monthlyRate), TotalMonths) - 1))), 2);
//        HLE_Result.val(EMI);

//        $('[id*=ButtonRow]').hide();
//        $('[id*=usercontroldiv]').show();
//        $('[id*=emailcalculationdiv]').show();

//    }
//}
function resetHLE() {
    HLE_LoanAmount.val(0);
    HLE_Rate.val(0);
    HLE_Period.val(0);
    HLE_Result.val(0);
}
//End of Home loan EMI


//Systematic Investment Plan Calculator.
//function validateSystematicsInvestmentPlan() {
//    if (validateText(SIP_InitialInvestment) && validateText(SIP_Monthly) && validateText(SIP_Period) && validateText(SIP_Rate))
//        return true;
//    else
//        return false;
//}

//function CalculateSIP() {
//    if (validateSystematicsInvestmentPlan()) {
//        var Initial = Number(SIP_InitialInvestment.val());
//        var Initiall = Number(SIP_InitialInvestment.val());
//        var Rate = Number(SIP_Rate.val());
//        var Monthly = Number(SIP_Monthly.val());
//        var Period = Number(SIP_Period.val());

//        if (Rate > 1.0)
//            Rate = Rate / 100;
//        Rate /= 12;
//        var investments = 0;
//        var count = 0;
//        while (count < Period) {
//            investments = Initial + Monthly;
//            Initial = (investments * Rate) + eval(Initial + Monthly);
//            count = count + 1;
//        }
//        SIP_FutureValue.val(roundNumber(Initial, 2));
//        var totinvestment = eval(count * Monthly) + Initiall;
//        SIP_Appreciation.val(roundNumber(eval(Initial - totinvestment), 2));

//        $('[id*=ButtonRow]').hide();
//        $('[id*=usercontroldiv]').show();
//        $('[id*=emailcalculationdiv]').show();
//    }
//}

function resetSIP() {
    SIP_Monthly.val(0);
    SIP_Rate.val(0);
    SIP_Period.val(0);
    SIP_InitialInvestment.val(0);
    SIP_FutureValue.val('');
    SIP_Appreciation.val('');
}

//End Of SIP

function validateMonthlySIP() {
    if (validateText(MSIP_InitialInvestment) && validateText(MSIP_Period) && validateText(MSIP_Rate))
        return true;
    else
        return false;
}

  //IY MonthlySip Calculator
//  function CalculateMSIP() {
//    if (validateMonthlySIP()) {
//        var Initial = Number(MSIP_InitialInvestment.val()); //F2
//        var Rate = Number(MSIP_Rate.val()); //F3
//        var Period = Number(MSIP_Period.val()); //F1

//        var result = 0;
//        var a = (1 + (Rate / 100) / 12);
//        var b = ((Rate / 100) / 12);
//        var c = Math.pow(a, Period);
//        result = (Initial * b / (a * (c - 1)));
//        MSIP_AmountPerMonthResult.val(roundNumber(result, 2));

//        $('[id*=ButtonRow]').hide();
//        $('[id*=usercontroldiv]').show();
//        $('[id*=emailcalculationdiv]').show();
//    }
//}
function resetMSIP() {
    MSIP_Rate.val(0);
    MSIP_Period.val(0);
    MSIP_InitialInvestment.val(0);
    MSIP_AmountPerMonthResult.val('');
}

//AmountToMeetFutureExpenses Calculator.
//Inflation Start
//function validateInflation() {
//    if (validateText(Inflation_MonthlyExp) && validateText(Inflation_InfRate) && validateText(Inflation_Period))
//        return true;
//    else
//        return false;
//}

//function CalculateMeetExpInFuture() {
//     if (validateInflation()) {
//        MonthlyExpenses = Number(Inflation_MonthlyExp.val());
//        InflationRateME = Number(Inflation_InfRate.val());
//        NumberOfYears = Number(Inflation_Period.val());
//        FV = roundNumber((MonthlyExpenses * Math.pow((1 + (InflationRateME / 100)), NumberOfYears)), 2);
//        Inflation_FutureVal.val(FV);
//        

//            $('[id*=ButtonRow]').hide();
//            $('[id*=usercontroldiv]').show();
//            $('[id*=emailcalculationdiv]').show();
//        
//    }
//}
function resetinflation() {
    Inflation_MonthlyExp.val(0);
    Inflation_InfRate.val(0);
    Inflation_Period.val(0);
    Inflation_FutureVal.val('');
}

//Inflation end


//Purchasingpower Calculator.
//Purchasing Power Start
//function validateInflation() {
//    if (validateText(PP_MonthlyExp) && validateText(PP_InfRate) && validateText(PP_Period))
//        return true;
//    else
//        return false;
//}

//function CalculatePurchasingPower() {
//    if (validateInflation()) {
//        var MonthlyExpenses = Number(PP_MonthlyExp.val());
//        var InflationRate = Number(PP_InfRate.val());
//        var NumberOfYears = Number(PP_Period.val());
//        var FV = roundNumber((MonthlyExpenses / Math.pow((1 + (InflationRate / 100)), NumberOfYears)), 2);
//        PP_purchasepower.val(FV);

//        $('[id*=ButtonRow]').hide();
//        $('[id*=usercontroldiv]').show();
//        $('[id*=emailcalculationdiv]').show();
//    }
//}
function resetpurchasingpower() {
    PP_MonthlyExp.val(0);
    PP_InfRate.val(0);
    PP_Period.val(0);
    PP_purchasepower.val('');
}

//Purchasing Power End

//Doubling Of Money

var ComputeFunction = function CalculateDOM() {
    var rate = Number($("#RateofReturnDOM").val());
    var NoOfYears = Math.ceil(72 / rate);
    $('#NoOfYearsDOM').val(NoOfYears);
    // checking the rate of return value and displaying the usercontroldiv if not "0".
    var ratevalue = $("#RateofReturnDOM").val();
    if (ratevalue != 0) {
        $('[id*=ButtonRow]').hide();
        $('[id*=usercontroldiv]').show();
        $('[id*=emailcalculationdiv]').show();
    }
}

function resetDOM() {
    $('#NoOfYearsDOM').val('');
}