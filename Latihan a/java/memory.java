// deklarasi kelas memori inherit hardware
class memory extends hardware{
    // variabel privat
    private int frequency;
    private int memorysize;
    private int supportcuda;
    // method public dan konstruktor
    public memory(){

    }
    public memory(int frequency, int memorysize, int supportcuda){
        this.frequency = frequency;
        this.memorysize = memorysize;
        this.supportcuda = supportcuda;
    }
    // get dans set semua variabel
    public int getfrequency(){
        return frequency;
    }
    public void setfrequency(int frequency){
        this.frequency = frequency;
    }
    public int getmemorysize(){
        return memorysize;
    }
    public void setmemorysize(int memorysize){
        this.memorysize = memorysize;
    }
    public int getsupportcuda(){
        return supportcuda;
    }
    public void setsupportcuda(int supportcuda){
        this.supportcuda = supportcuda;
    }
}