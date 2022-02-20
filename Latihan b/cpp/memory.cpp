// Include
#include <iostream>
#include <string>
#include "hardware.cpp"
using namespace std;

// deklarasi kelas memori inherit hardware
class memory : public hardware{
    // variabel privat
    private:
        int frequency;
        int memorysize;
        int supportcuda;
    // method public dan konstruktor
    public:
        memory(){

        }
        // get dans set semua variabel
        void setfrequency(int frequency){
            this->frequency = frequency;
        }
        int getfrequency(){
            return this->frequency;
        }
        void setmemorysize(int memorysize){
            this->memorysize = memorysize;
        }
        int getmemorysize(){
            return this->memorysize;
        }
        void setsupportcuda(int supportcuda){
            this->supportcuda = supportcuda;
        }
        int getsupportcuda(){
            return this->supportcuda;
        }
        // desktruktor
        ~memory(){
        }
};