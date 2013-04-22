package com.saleshare.order

import scala.math.BigDecimal

class BaseOrderContext(price: BigDecimal, description: String) extends OrderContext {
	override def getPrice() = price;

	override def getDescription() = description;
}