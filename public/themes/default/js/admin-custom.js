
const ctx = document.getElementById('incomeSummeryChart');

new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
    datasets: [
      {
        label: 'INCOME',
        data: [400000, 300000, 350000, 400000, 450000, 500000, 480000, 450000, 400000, 500000, 520000, 600000],
        backgroundColor: 'rgba(54, 162, 235, 0.7)',
        borderColor: 'rgba(54, 162, 235, 1)',
        borderWidth: 1
      },
      {
        label: 'EXPENSES',
        data: [100000, 120000, 150000, 100000, 120000, 110000, 130000, 120000, 150000, 110000, 120000, 130000],
        backgroundColor: 'rgba(255, 99, 132, 0.7)',
        borderColor: 'rgba(255, 99, 132, 1)',
        borderWidth: 1
      },
      {
        label: 'PROFIT/LOSS',
        data: [300000, 180000, 200000, 300000, 330000, 390000, 350000, 330000, 250000, 390000, 400000, 470000],
        backgroundColor: 'rgba(75, 192, 192, 0.7)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
      }
    ]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});




$(document).ready( function () {
    $('#feesCashTable').DataTable();
    $('#feesPosTable').DataTable();
    $('#feesCardPaymentTable').DataTable();
    $('#feesCardPaymentTable').DataTable();
    $('#feesErrorPaymentTable').DataTable();
    $('#feesBankPaymentTable').DataTable();
    $('#PaymentHistoryTable').DataTable();
    $('#otherPyamentCash').DataTable();
    $('#liveClass').DataTable();
    $('#attendanceTable').DataTable();
    $('#cashBlanceTbl').DataTable();
    $('#mySalaryTbl').DataTable();
    $('#myLeavesTbl').DataTable();
    $('#pendingOrderPickUp').DataTable();
    $('#pendingOrderPickUp').DataTable();
    $('#pendingOrderDeliver').DataTable();
    $('#disOrderTbl').DataTable();
    $('#pendingDisOrder').DataTable();
    $('#addItems').DataTable();
    $('#studentDetailsTable').DataTable();
    $('#inactiveStudents').DataTable();
    $('#scholarshopDetails').DataTable();
    $('#scholarshopAdd').DataTable();
    $('#recAccess').DataTable();
    $('#addRecAccess').DataTable();
    $('#analysingTbl').DataTable();
    $('#pendingCertificateTbl').DataTable();
    $('#approvedCertificateTbl').DataTable();
    $('#subjectwiseVideoTbl').DataTable();
    $('#otherTalenteVideoTbl').DataTable();
    $('#classIssues').DataTable();
    $('#videoRecIssues').DataTable();
    $('#teacherReview').DataTable();
    $('#classVideoAnalysing').DataTable();
    $('#classVideosSummery').DataTable();
    $('#videoTimeTbl').DataTable();
    $('#teacherPayment').DataTable();
    $('#paymentAnalysingTbl').DataTable();
    $('#ourTeacherTbl').DataTable();
    $('#ourTeacherTbl').DataTable();
    $('#scheduleClass').DataTable();
    $('#gradeTimeTbl').DataTable();
    $('#addSubjectTbl').DataTable();

    $('#withHoldingTaxTbl').DataTable();
    $('#mainCashTbl').DataTable();
    $('#depositeCashTbl').DataTable();
    $('#bankCashTbl').DataTable();
    $('#pettyCashTbl').DataTable();
    $('#pettyCashViewTbl').DataTable();
    $('#specialApprovalsTbl').DataTable();
    $('#employeeSalaryTbl').DataTable();
    $('#employeeSalaryTbl').DataTable();
    $('#employeeAttendanceTbl').DataTable();
    $('#employeeLeaveTbl').DataTable();
    $('#employeeLeaveCheckTbl').DataTable();
    $('#pendingLeaveTbl').DataTable();
    $('#gradeRequestTbl').DataTable();
    $('#freeRequestTbl').DataTable();

});









