<?php
    $destination="Amsterdam";
    Switch ($destination){
        case "Las Vegas":
            echo " Your Destination Is<b> $destination </b> So Don't Forget To";
            echo "Bring an extra $500";
            break;
        case 'Amsterdam':
            echo "Your Destination Is <b>$destination</b> So Don't Forget To ";
            echo "Bring An Open Mind";
            break;
        case 'Egypt':
            echo "Your Destination Is <b>$destination</b> So Don't Forget To ";
            echo "Bring 15 Bottles of SPF 50 Sunscreen";
            break;
        case 'Tokyo':
            echo "Your Destination Is <b>$destination</b> So Don't Forget To ";
            echo "Bring Lots of Money";
            break;
        case 'Caribbean Islands':
            echo "Your Destination Is <b>$destination</b> So Don't Forget To ";
            echo "Bring A Swimsuit";
            break;
        default:
            echo "Please Check The Validity Of Your <b>Destination</b>, Thankyou!";
            break;
    }
?> 