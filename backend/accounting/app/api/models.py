from pydantic import BaseModel
from typing import List, Optional

class BillIn(BaseModel):
    amount: int
    type: str
    paymentType: str
    firstname: str
    lastname: str
    middlename: str
    patient_id: int


class BillOut(BillIn):
    id: int


class BillUpdate(BillIn):
    amount: int
    type: str
    paymentType: str
    firstname: str
    lastname: str
    middlename: str
    patient_id: int