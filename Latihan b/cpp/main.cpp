// Include
#include <iostream>
#include <string>
#include "memory.cpp"
using namespace std;

int main(){
    // deklarasi variabel baru berisi memori
    memory kmemory;
    //  input variabel lainnya
    kmemory.setprice(1600000);
    kmemory.setidproduct(15);
    kmemory.setbrand("MSI");
    kmemory.setmodel("N750Ti");
    kmemory.setfrequency(5400);
    kmemory.setmemorysize(2048);
    kmemory.setsupportcuda(640);
    // Tampilkan
    cout << "price       : " << kmemory.getprice() <<endl;
    cout << "idproduct   : " << kmemory.getidproduct() <<endl;
    cout << "brand       : " << kmemory.getbrand() <<endl;
    cout << "model       : " << kmemory.getmodel() <<endl;
    cout << "frequency   : " << kmemory.getfrequency() <<endl;
    cout << "memorysize  : " << kmemory.getmemorysize() <<endl;
    cout << "supportcuda : " << kmemory.getsupportcuda() <<endl;
    return 0;
}