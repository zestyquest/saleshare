package com.saleshare.states

import com.saleshare.event.OrderEvent

trait OrderState {

  def handle(event: OrderEvent);

}