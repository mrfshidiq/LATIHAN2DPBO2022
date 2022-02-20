// Include
#include <iostream>
#include <string>
using namespace std;

// deklarasi kelas produk
class product{
    // variabel privat
    private:
        int price;
        int idproduct;
    // method public dan konstruktor
    public:
        product(){

        }
        // get dans set semua variabel
        void setprice(int price){
            this->price = price;
        }
        int getprice(){
            return this->price;
        }
        void setidproduct(int idproduct){
            this->idproduct = idproduct;
        }
        int getidproduct(){
            return this->idproduct;
        }
        // desktruktor
        ~product(){
        }
};