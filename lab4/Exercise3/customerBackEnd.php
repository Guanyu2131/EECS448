<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print receipt</title>
</head>
<body>
    <table class="recipt" align = "center" border ="1">
        <tr>
            <td></td>
            <td><b>Quantity</b></td>
            <td><b>Cost Per Item</b></td>
            <td><b>Sub Total</b></td>
        </tr>
        <tr>
            <td><b>AMD Three Sets</b></td>
            <td class="inside"><?php $AMDNumber = (int)$_POST['set']; echo "$AMDNumber"; ?></td>
            <td class="inside">$149.98</td>
            <td class="inside">$<?php $AMDNumber = (int)$_POST['set']; $Atotal=$AMDNumber*149.98; echo "$Atotal"; ?></td>
        </tr>
        <tr>
            <td><b>MSI Moniter</b></td>
            <td class="inside"><?php $MSINumber = (int)$_POST['MSI']; echo "$MSINumber"; ?></td>
            <td class="inside">$419.99</td>
            <td class="inside">$<?php $MSINumber = (int)$_POST['MSI']; $Mtotal=$MSINumber*419.99; echo "$Mtotal"; ?></td>
        </tr>
        <tr>
            <td><b>LG Moniter</b></td>
            <td class="inside"><?php $LGNumber = (int)$_POST['LG']; echo "$LGNumber"; ?></td>
            <td class="inside">$1899.00</td>
            <td class="inside">$<?php $LGNumber = (int)$_POST['LG']; $Ltotal=$LGNumber*1899.00; echo "$Ltotal"; ?></td>
        </tr>
        <tr>
            <td><b>Ryzen 5 Core</b></td>
            <td class="inside"><?php $RyzenNumber = (int)$_POST['Ryzen']; echo "$RyzenNumber"; ?></td>
            <td class="inside">$169.99</td>
            <td class="inside">$<?php $RyzenNumber = (int)$_POST['Ryzen']; $Rtotal=$RyzenNumber*169.99; echo "$Rtotal"; ?></td>
        </tr>
        <tr>
            <td><b>Intel i9 Core</b></td>
            <td class="inside"><?php $IntelNumber = (int)$_POST['Intel']; echo "$IntelNumber"; ?></td>
            <td class="inside">$529.99</td>
            <td class="inside">$<?php $IntelNumber = (int)$_POST['Intel']; $Itotal=$IntelNumber*529.99; echo "$Itotal"; ?></td>
        </tr>
        <tr>
            <td><b>Shipping</b></td>
            <td class="inside" colspan="2">
                <?php 
                    $shipChoice = $_POST["shipment"];
                    if($shipChoice == "1000")
                    echo "Free";
                    else if($shipChoice == "50")
                    echo "Over night";
                    else if($shipChoice == "5")
                    echo "Three day";
                ?>
            </td>
            <td class="inside">
                <?php 
                    $shipChoice = $_POST["shipment"];
                    if($shipChoice == "1000")
                    $ship = 0.00;
                    else if($shipChoice == "50")
                    $ship = 50.00;
                    else if($shipChoice == "5")
                    $ship = 5.00;
                    echo "$$ship";
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="3"><center><b>Total Cost</b></center></td>
            <td>
                <?php 
                    $total = $Atotal + $Mtotal + $Ltotal + $Rtotal + $Itotal + $ship;
                    echo "$$total";
                ?>
            </td>
        </tr>
    </table >

</body>
</html>




