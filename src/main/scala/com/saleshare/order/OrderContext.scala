package com.saleshare.order

import com.saleshare.event.OrderEvent
import scala.math.BigDecimal

trait OrderContext {

  def getDescription(): String;

  def getPrice(): BigDecimal;

}