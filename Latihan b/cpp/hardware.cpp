// Include
#include <iostream>
#include <string>
#include "product.cpp"
using namespace std;
// deklarasi kelas hardware inherit produk
class hardware : public product{
    // variabel privat
    private:
        string brand;
        string model;
    // method public dan konstruktor
    public:
        hardware(){

        }
        // get dans set semua variabel
        void setbrand(string brand){
            this->brand = brand;
        }
        string getbrand(){
            return this->brand;
        }
        void setmodel(string model){
            this->model = model;
        }
        string getmodel(){
            return this->model;
        }
        // desktruktor
        ~hardware(){

        }
};