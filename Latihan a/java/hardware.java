// deklarasi kelas hardware inherit produk
class hardware extends product{
    // variabel privat
    private String brand;
    private String model;
    // method public dan konstruktor
    public hardware(){

    }
    public hardware(String brand, String model){
        this.brand=brand;
        this.model=model;
    }
    // get dans set semua variabel
    public String getbrand(){
        return brand;
    }
    public void setbrand(String brand){
        this.brand = brand;
    }
    public String getmodel(){
        return model;
    }
    public void setmodel(String model){
        this.model = model;
    }
}