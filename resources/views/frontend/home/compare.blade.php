@extends('frontend.admin')

@section('content')
    <div id="content">

    <div class="banner__compare">
        <div class="grid wide">
            <div class="banner__compare--title">
                <ul class="compare__banner">
                    <li>
                        <a href="home.html">Trang chủ /</a>
                    </li>
                    <li>
                        <a href="#" class="compare__banner--link"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="table__compare">
        <div class="grid wide">
            <table class="table__item">
                <thead class="table__post">
                    <tr>
                        <th class="table__img"><i class="fas fa-image"></i></th>
                        <th class="table_name">Tên Sản phẩm</th>
                        <th class="table__price"><i class="far fa-money-bill-alt"></i></th>
                        <th class="table__star"><i class="far fa-star"></i></th>
                        <th class="table__title">Mô tả</th>
                        <th class="table__delete"><i class="far fa-trash-alt"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="center">hình 1</td>
                        <td class="table__padding">rau muống</td>
                        <td class="center">2000</td>
                        <td class="center">hình sao</td>
                        <td class="table__padding">rau sạch sẽ</td>
                        <td class="center delete__post"><i class="far fa-trash-alt"></i></td>
                    </tr>
                    <tr>
                        <td class="center">hình 1</td>
                        <td class="table__padding">rau muống</td>
                        <td class="center">2000</td>
                        <td class="center">hình sao</td>
                        <td class="table__padding">rau sạch sẽ</td>
                        <td class="center delete__post"><i class="far fa-trash-alt"></i></td>
                    </tr>
                    <tr>
                        <td class="center">hình 1</td>
                        <td class="table__padding">rau muống</td>
                        <td class="center">2000</td>
                        <td class="center">hình sao</td>
                        <td class="table__padding">rau sạch sẽ</td>
                        <td class="center delete__post"><i class="far fa-trash-alt"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection