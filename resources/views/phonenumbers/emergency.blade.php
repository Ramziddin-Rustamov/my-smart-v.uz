@extends('layouts.app')

@section('title', 'Telefon raqamlar ')

@section('content')
<section style="background-color: #193c1a71;"style="padding-top:160px">
    <div class="container py-5">
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col">T/R</th>
                        <th scope="col">F.I.O</th>
                        <th scope="col">Lovozimi</th>
                        <th scope="col">Telefon raqam </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Қурбонов Фахриддин</td>
                        <td>Раис</td>
                        <td>
                            <a class="text-black" href="tel:+998995953306">
                                +998 99 595 33 06
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Исломов Ҳусниддин</td>
                        <td>Имом хатиб</td>
                        <td>
                            <a class="text-black" href="tel:+998993114528">
                                +998 99 311 45 28
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Отабеков Ғолиб</td>
                        <td>Котиб</td>
                        <td>
                            <a class="text-black" href="tel:+998999625450">+998 99 962 54 50</a>
                        </td>
                    </tr>
                    <!-- Add more rows here -->
                    <tr>
                        <td>4</td>
                        <td>Олимов Саттор</td>
                        <td>шифокор</td>
                        <td>
                            <a class="text-black" href="tel:+998930527102">
                                +998 93 052 71 02
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>        
          <ul class="list-group">
                <li class="list-group-item">
                    <a href="tel:101">
                        <i class="fas fa-phone"></i> 101 - Yong'in xavfsizligi xizmati
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="tel:102">
                        <i class="fas fa-phone"></i> 102 - Ichki ishlar organlari
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="tel:103">
                        <i class="fas fa-phone"></i> 103 - Birinchi tibbiy yordam
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="tel:104">
                        <i class="fas fa-phone"></i> 104 - Favqulodda gaz xizmati
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="tel:1050">
                        <i class="fas fa-phone"></i> 1050 - Qutqaruv xizmati (FVT)
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="tel:1007">
                        <i class="fas fa-phone"></i> 1007 - Toshkent shahar prokuraturasining ishonch telefon liniyasi
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="tel:1008">
                        <i class="fas fa-phone"></i> 1008 - Adliya vazirligining ishonch telefon liniyasi
                    </a>
                </li>
            </ul>
        
    </div>
</section>
@endsection