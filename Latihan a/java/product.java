// deklarasi kelas produk
class product{
    // variabel privat
    private int price;
    private int idproduct;
    // method public dan konstruktor
    public product(){

    }
    public product(int price, int idproduct){
        this.price=price;
        this.idproduct=idproduct;
    }
    // get dans set semua variabel
    public int getprice(){
        return price;
    }
    public void setprice(int price){
        this.price = price;
    }
    public int getidproduct(){
        return idproduct;
    }
    public void setidproduct(int idproduct){
        this.idproduct = idproduct;
    }
}