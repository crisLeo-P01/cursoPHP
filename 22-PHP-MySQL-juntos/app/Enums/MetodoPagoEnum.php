<?php

namespace App\Enums;

enum MetodoPagoEnum: int {
  case TarjetaCredito = 1;
  case CuentaBanco = 2;
}