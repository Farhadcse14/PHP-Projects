<?php 
    require_once('../include/initialize.php');
    $print = "disabled";
    if(isset($_GET['sid'])){
       $sid = $_GET['sid'];
       $std = Student::find_by_id($sid);

    }


?>
<?php 
    require('fpdf181/fpdf.php');
    
    $pdf = new FPDF('p', 'mm', 'A4');
    $pdf-> Addpage();
    
    $pdf->Image('image/just.png',10, 10, 10);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(88, 5, "Shaheed Mashiur Rahaman Hall", 0, 1, 'C');
    $pdf->SetFont('Arial', '', 8);
    $pdf->Cell(82, 3, "Jessore University of Science and Technology", 0, 1, 'C');
    $pdf->Cell(82, 3, "Jessore-7408, Bangladesh", 0, 1, 'C');

    $pdf->Cell(20, 10, "", 0, 0, 'C');
    
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetFillColor(180,180,255);
    $pdf->SetDrawColor(50,50,100);
    $pdf->Multicell(40, 5, "Student's ID card", 0, 'C', true);

    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(20, 5, "Name:", 0, 0, 'L');
    $pdf->Cell(50, 5, "{$std->first_name}"." "."{$std->last_name}", 0, 1, 'L');

    $pdf->Cell(20, 5, "Department:", 0, 0, 'L');
    $pdf->Cell(50, 5, "CSE", 0, 1, 'L');

    $pdf->Cell(20, 5, "Roll No:", 0, 0, 'L');
    $pdf->Cell(50, 5, "{$std->roll}", 0, 1, 'L');

    $pdf->Cell(20, 5, "Session:", 0, 0, 'L');
    $pdf->Cell(50, 5, "{$std->session}", 0, 1, 'L');


    $pdf->Ln(5);
    $pdf->Cell(40, 5, "Signature of student", 0, 0, 'L');
    $pdf->Cell(50, 5, "Signature of provost", 0, 0, 'L');

    $pdf->Image("image/{$std->img_name}",58, 27, 18, 18);
    $pdf->Image("image/{$std->sig_name}",15, 48, 25, 4);
    $pdf->Image("signature/chairman.jpg",55, 48, 25, 4);

    $pdf->Ln(20);

    $pdf->Cell(20, 5, "Contact No:", 0, 0, 'L');
    $pdf->Cell(25, 5, "{$std->mobile}", 0, 0, 'L');

    $pdf->Cell(23, 5, "Blood Group:", 0, 0, 'L');
    $pdf->Cell(20, 5, "{$std->b_group}", 0, 1, 'L');

    $pdf->Cell(20, 5, "Date of birth:", 0, 0, 'L');
    $pdf->Cell(25, 5, "  {$std->dob}", 0, 0, 'L');

    $pdf->Cell(23, 5, "Room No:", 0, 0, 'L');
    $pdf->Cell(20, 5, "{$std->room}", 0, 1, 'L');

    $pdf->Cell(30, 5, "Present Address:", 0, 0, 'L');
    $pdf->Cell(20, 5, "{$std->par_add}", 0, 1, 'L');

    $pdf->SetFont('Arial', 'B', 13);
    $pdf->Cell(80, 8, "Instruction", 0, 1, 'C');
    $pdf->SetFont('Arial', '', 8);
    $pdf->Cell(80, 3, "1. This ID is non transferable, you have to surrender this id ", 0, 1, 'L');
    $pdf->Cell(80, 3, "card at the time of taking release from this hall", 0, 1, 'L');
    $pdf->Cell(80, 5, "2.File GD to local police station if lost", 0, 1, 'L');
    $pdf->Cell(80, 3, "3.If found, please deposite it to local police station or", 0, 1, 'L');
    $pdf->Cell(80, 3, "post to Provost, SMR Hall, Jessore", 0, 1, 'L');
   
    
    $pdf->Output();
?>