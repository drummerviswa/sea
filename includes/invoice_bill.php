<?php
session_start();

include_once("../fpdf/fpdf.php");

if ($_GET["order_date"] && $_GET["invoice_no"]) {
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->setFont("Arial", "B", 10);
    $pdf->Cell(190, 3, "Soundari Ethirajan Assosiates", 0, 1, "C");
    $pdf->setFont("Arial", null, 8);
    $pdf->Cell(190, 5, "31 MADUVINKARAI FIRST STREET,ALANDUR,CHENNAI", 0, 1, "C");
    $pdf->setFont("Arial", null, 8);
    $pdf->Cell(190, 2, "8122131112", 0, 1, "C");
    $pdf->setFont("Arial", null, 7);

    $pdf->Cell(10, 10, "Date", 0, 0);
    $pdf->Cell(150, 10, ": " . $_GET["order_date"], 0, 0);
    $pdf->Cell(20, 10, "Invoice Number", 0, 0);
    $pdf->Cell(10, 10, ": " . $_GET["invoice_no"], 0, 1);
    $pdf->Cell(20, 10, "Customer Name", 0, 0);
    $pdf->Cell(30, 10, ": " . $_GET["cust_name"], 0, 1);

    $pdf->Cell(20, 3, "Orginal Copy", 1, 0, "C");
    $pdf->Cell(65, 3, "", 0, 0,);
    $pdf->Cell(50, 3, "INVOICE NOTE", 0, 0,);
    $pdf->Cell(50, 3, "GSTNO: XXXXXXXXXXXXXXXXXXXXXXXXXX", 0, 0, 1);

    $pdf->Cell(50, 5, "", 0, 1);

    $pdf->Cell(10, 4, "S.No", 1, 0, "C");
    $pdf->Cell(70, 4, "Product Name", 1, 0, "C");
    $pdf->Cell(30, 4, "Quantity", 1, 0, "C");
    $pdf->Cell(14, 4, "Price", 1, 0, "C");
    $pdf->Cell(13, 4, "CGST", 1, 0, "C");
    $pdf->Cell(13, 4, "SGST", 1, 0, "C");
    $pdf->Cell(40, 4, "Total (Rs)", 1, 1, "C");

    for ($i = 0; $i < count($_GET["pid"]); $i++) {
        $pdf->Cell(10, 4, ($i + 1), 1, 0, "C");
        $pdf->Cell(70, 4, $_GET["pro_name"][$i], 1, 0, "C");
        $pdf->Cell(30, 4, $_GET["qty"][$i], 1, 0, "C");
        $pdf->Cell(14, 4, $_GET["price"][$i], 1, 0, "C");
        $pdf->Cell(13, 4, $_GET["gst"][$i], 1, 0, "C");
        $pdf->Cell(13, 4, $_GET["gst"][$i], 1, 0, "C");
        $pdf->Cell(40, 4, ($_GET["qty"][$i] * $_GET["price"][$i]), 1, 1, "C");
    }

    $pdf->Cell(50, 6, "", 0, 1);

    $pdf->Cell(8, 10, "Gst Tax", 0, 0);
    $pdf->Cell(12, 10, ": " . $_GET["gst"], 0, 0);
    $pdf->Cell(10, 10, "Discount", 0, 0);
    $pdf->Cell(8, 10, ": " . $_GET["discount"], 0, 0);
    $pdf->Cell(10, 10, "Net Total", 0, 0);
    $pdf->Cell(12, 10, ": " . $_GET["net_total"], 0, 0);
    $pdf->Cell(6, 10, "Paid", 0, 0);
    $pdf->Cell(6, 10, ": " . $_GET["paid"], 0, 0);
    $pdf->Cell(14, 10, "Due Amount", 0, 0);
    $pdf->Cell(12, 10, ": " . $_GET["due"], 0,);
    $pdf->Cell(16, 10, "Payment Type", 0, 0);
    $pdf->Cell(12, 10, ": " . $_GET["payment_type"], 0,);
    $pdf->SetFont("Arial", "B", 10);
    $pdf->Cell(80, 6, "", 0, 1, "R");
    $pdf->Cell(170, 10, "Grand Total", 0, 0, "R");
    $pdf->Cell(20, 10, ": " . $_GET["net_total"], 0, 1, "R");
    $pdf->setFont("Arial", null, 7);


    $pdf->Cell(15, 10, "Signature", 0, 0, "R");
    $pdf->Cell(0, 70, "-------------------------------------------------------------------------------------------------------------------------------------", 0, 1, "C");

    $pdf->Cell(250, 20, "", 0, 1, "C");
    $pdf->Cell(190, 3, "Soundari Ethirajan Assosiates", 0, 1, "C");
    $pdf->setFont("Arial", null, 8);
    $pdf->Cell(190, 5, "31 MADUVINKARAI FIRST STREET,ALANDUR,CHENNAI", 0, 1, "C");
    $pdf->setFont("Arial", null, 8);
    $pdf->Cell(190, 2, "8122131112", 0, 1, "C");
    $pdf->setFont("Arial", null, 7);

    $pdf->Cell(10, 10, "Date", 0, 0);
    $pdf->Cell(150, 10, ": " . $_GET["order_date"], 0, 0);
    $pdf->Cell(20, 10, "Invoice Number", 0, 0);
    $pdf->Cell(10, 10, ": " . $_GET["invoice_no"], 0, 1);
    $pdf->Cell(20, 10, "Customer Name", 0, 0);
    $pdf->Cell(30, 10, ": " . $_GET["cust_name"], 0, 1);

    $pdf->Cell(20, 3, "Duplicate Copy", 1, 0, "C");
    $pdf->Cell(65, 3, "", 0, 0,);
    $pdf->Cell(50, 3, "INVOICE NOTE", 0, 0,);
    $pdf->Cell(50, 3, "GSTNO: XXXXXXXXXXXXXXXXXXXXXXXXXX", 0, 0, 1);

    $pdf->Cell(50, 5, "", 0, 1);

    $pdf->Cell(10, 4, "S.No", 1, 0, "C");
    $pdf->Cell(70, 4, "Product Name", 1, 0, "C");
    $pdf->Cell(30, 4, "Quantity", 1, 0, "C");
    $pdf->Cell(14, 4, "Price", 1, 0, "C");
    $pdf->Cell(13, 4, "CGST", 1, 0, "C");
    $pdf->Cell(13, 4, "SGST", 1, 0, "C");
    $pdf->Cell(40, 4, "Total (Rs)", 1, 1, "C");

    for ($i = 0; $i < count($_GET["pid"]); $i++) {
        $pdf->Cell(10, 4, ($i + 1), 1, 0, "C");
        $pdf->Cell(70, 4, $_GET["pro_name"][$i], 1, 0, "C");
        $pdf->Cell(30, 4, $_GET["qty"][$i], 1, 0, "C");
        $pdf->Cell(14, 4, $_GET["price"][$i], 1, 0, "C");
        $pdf->Cell(13, 4, $_GET["gst"][$i], 1, 0, "C");
        $pdf->Cell(13, 4, $_GET["gst"][$i], 1, 0, "C");
        $pdf->Cell(40, 4, ($_GET["qty"][$i] * $_GET["price"][$i]), 1, 1, "C");
    }

    $pdf->Cell(50, 6, "", 0, 1);

    $pdf->Cell(8, 10, "Gst Tax", 0, 0);
    $pdf->Cell(12, 10, ": " . $_GET["gst"], 0, 0);
    $pdf->Cell(10, 10, "Discount", 0, 0);
    $pdf->Cell(8, 10, ": " . $_GET["discount"], 0, 0);
    $pdf->Cell(10, 10, "Net Total", 0, 0);
    $pdf->Cell(12, 10, ": " . $_GET["net_total"], 0, 0);
    $pdf->Cell(6, 10, "Paid", 0, 0);
    $pdf->Cell(6, 10, ": " . $_GET["paid"], 0, 0);
    $pdf->Cell(14, 10, "Due Amount", 0, 0);
    $pdf->Cell(12, 10, ": " . $_GET["due"], 0,);
    $pdf->Cell(16, 10, "Payment Type", 0, 0);
    $pdf->Cell(12, 10, ": " . $_GET["payment_type"], 0,);
    $pdf->SetFont("Arial", "B", 10);
    $pdf->Cell(80, 6, "", 0, 1, "R");
    $pdf->Cell(170, 10, "Grand Total", 0, 0, "R");
    $pdf->Cell(20, 10, ": " . $_GET["net_total"], 0, 1, "R");
    $pdf->setFont("Arial", null, 7);


    $pdf->Cell(180, 10, "Signature", 0, 0, "R");

    $pdf->Output("../PDF_INVOICE/" . $_GET["cust_name"] . "_" . $_GET["invoice_no"] . ".pdf", "F");

    $pdf->Output();
}
