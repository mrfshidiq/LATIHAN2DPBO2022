public class main{
    public static void main(String[] args){

        //deklarasi variabel baru berisi memori
        memory o_mem = new memory(3600, 16, 32);
        //input variabel lainnya
        o_mem.setprice(1600000);
        o_mem.setidproduct(15);
        o_mem.setbrand("MSI");
        o_mem.setmodel("N750Ti");
        o_mem.setfrequency(5400);
        o_mem.setmemorysize(2048);
        o_mem.setsupportcuda(640);

        /*
        hardware o_hw = new hardware("Corsair", "Vegeance");
        //o_mem.sethardware();
        product o_prd = new product(1200000, 15);
        //o_prd.setproduct();
        memory o_mem = new memory(3600, 16, 32);
        //o_mem.setmemory();
        */

        //tampilkan
        System.out.print("Brand         : " + o_mem.getbrand());
        System.out.print("\n");
        System.out.print("Model         : " + o_mem.getmodel());
        System.out.print("\n");
        System.out.print("Price         : " + o_mem.getprice());
        System.out.print("\n");
        System.out.print("IdProduct     : " + o_mem.getidproduct());
        System.out.print("\n");
        System.out.print("Frequency     : " + o_mem.getfrequency());
        System.out.print("\n");
        System.out.print("MemorySize    : " + o_mem.getmemorysize());
        System.out.print("\n");
        System.out.print("Supports Cuda : " + o_mem.getsupportcuda());
        System.out.print("\n");

    }
}