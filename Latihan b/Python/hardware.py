# Include/import
from product import product
# deklarasi kelas hardware inherit produk
class hardware(product):
    # method dan konstruktor
    def __init__(self):
        self.brand = ""
        self.model = ""
    #  get dans set semua variabel
    def setbrand(self, brand):
        self.brand = brand
    def getbrand(self):
        return self.brand
    def setmodel(self, model):
        self.model = model
    def getmodel(self):
        return self.model