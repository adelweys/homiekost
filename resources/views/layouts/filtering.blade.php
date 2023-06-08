<!-- Filtering Start -->
<div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="bg-white shadow" style="padding: 35px;">
            <form action="{{route('cost-list-search')}}" method="GET">
            <div class="row g-2">
                <div class="col-md-10">
                    <div class="row g-2">
                        
                                <div class="col-md-6">
                                    
                                        <input class="form-control col-md-3" type="text" name="search"  placeholder="Mau cari kos apa?"> 
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select" name="wilayah">
                                        <option selected value=""> Wilayah</option>
                                        <option value="Dr. Mansur"> Dr. Mansur </option>
                                        <option value="Jamin Ginting"> Jamin Ginting </option>
                                        <option value="Setia Budi"> Setia Budi </option> 
                                        <option value="Iskandar Muda"> Iskandar Muda </option> 
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select" name="price_range">
                                        <option selected value="">Harga</option>
                                        <option value="1"> < Rp 500.000 </option>
                                        <option value="2"> Rp 500.000 - Rp 850.000</option>
                                        <option value="3"> Rp 850.000 - Rp 1.300.000 </option> 
                                        <option value="4"> > Rp 1.300.000 </option> 
                                    </select>
                                </div>
                            </div>
                             </div>
                <div class="col-md-2">
                    <button class="btn btn-primary w-100" type="submit">Cari</button>
                </div>
                                    
            </div>
        </form>
        </div>
    </div>
</div>
<!-- Filtering End -->