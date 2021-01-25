<?php
namespace Transports;

class Transportas
{

private $Marke;
private $Modelis;
private $Kaina;
private $Svoris;
private $ArVariklis;
private $VarGalingumas;
private $Aprasymas;
private $MaksimalusGreitis;
private $KiekZmoniuTelpa;



public function __markmod($Marke,$Modelis)
{
    $this->Marke=$Marke;
    $this->Modelis=$Modelis;
}

public function __construct($Marke,$Modelis,$Kaina, $Svoris,$ArVariklis, $VarGalingumas,
                            $Aprasymas, $MaksimalusGreitis,$KiekZmoniuTelpa)
{

    $this->Marke=$Marke;
    $this->Modelis=$Modelis;
    $this->Kaina=$Kaina;
    $this->Svoris=$Svoris;
    $this->ArVariklis=$ArVariklis;
    $this->VarGalingumas=$VarGalingumas;
    $this->Aprasymas=$Aprasymas;
    $this->MaksimalusGreitis=$MaksimalusGreitis;
    $this->KiekZmoniuTelpa=$KiekZmoniuTelpa;

}
public function getTransportInfo()
{
    return $TransportInfo =[
    $this->Marke,
    $this->Modelis,
    $this->Kaina,
    $this->Svoris,
    $this->ArVariklis,
    $this->VarGalingumas,
    $this->Aprasymas,
    $this->MaksimalusGreitis,
    $this->KiekZmoniuTelpa
    ];


}





};
