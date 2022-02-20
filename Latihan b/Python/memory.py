# Include/import
from hardware import hardware
# deklarasi kelas memori inherit hardware
class memory(hardware):
    # method dan konstruktor
    def __init__(self):
        self.frequency = 0
        self.memorysize = 0
        self.supportscuda = 0
    #  get dans set semua variabel
    def setfrequency(self, frequency):
        self.frequency = frequency
    def getfrequency(self):
        return self.frequency
    def setmemorysize(self, memorysize):
        self.memorysize = memorysize
    def getmemorysize(self):
        return self.memorysize
    def setsupportscuda(self, supportscuda):
        self.supportscuda = supportscuda
    def getsupportscuda(self):
        return self.supportscuda