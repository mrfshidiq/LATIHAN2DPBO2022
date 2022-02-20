# deklarasi kelas produk
class product:
    # method dan konstruktor
    def __init__(self):
        self.price = 0
        self.idproduct = 0
    #  get dans set semua variabel
    def setprice(self, price):
        self.price = price
    def getprice(self):
        return self.price
    def setidproduct(self, idproduct):
        self.idproduct = idproduct
    def getidproduct(self):
        return self.idproduct