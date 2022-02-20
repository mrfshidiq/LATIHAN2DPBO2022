# from product import product
# from hardware import hardware

# Include
from memory import memory
# deklarasi variabel baru berisi memori
m = memory()
# input variabel lainnya
m.setidproduct(15)
m.setprice(1600000)
m.setbrand("MSI")
m.setmodel("N750Ti")
m.setfrequency(5400)
m.setmemorysize(2048)
m.setsupportscuda(640)
# Tampilkan
print("Id Product   :" + str(m.getidproduct()))
print("Price        :" + str(m.getprice()))
print("Brand        :" + str(m.getbrand()))
print("Model        :" + str(m.getmodel()))
print("Frequency    :" + str(m.getfrequency()))
print("Memory Size  :" + str(m.getmemorysize()))
print("Support Cuda :" + str(m.getsupportscuda()))