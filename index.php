<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sparepart Motor - Home</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body class="light-mode">
    <!-- Header -->
    <header>
        <div class="container">
            <h1>Sparepart Motor</h1>
            <nav>
                <ul id="navbar">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.html">Tentang Saya</a></li>
                    <li><a href="order.php">Order</a></li>
                    <?php if (isset($_SESSION['user'])): ?>
                        <li><a href="logout.php">Logout</a></li>
                    <?php else: ?>
                        <li><a href="login.php">Login</a></li>
                    <?php endif; ?>
                    <li>
                        <label class="switch">
                            <input type="checkbox" id="theme-toggle" />
                            <span class="slider"></span>
                        </label>
                    </li>
                </ul>
                <button class="hamburger" id="hamburger">&#9776;</button>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h2>Temukan Sparepart Motor Berkualitas Terbaik</h2>
            <p>
                Menjual berbagai macam sparepart asli dan aftermarket dengan harga terjangkau. Perawatan motor Anda dimulai dari sini!
            </p>
            <button id="open-popup">Lihat Produk Terbaru</button>
        </div>
    </section>

     <!-- Product Section -->
     <section class="products">
            <div class="container">
                <h2>Produk Kami</h2>
                <div class="product-cards">
                    <div class="card">
                        <img
                            src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAMAAzAMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAAAQIDBAUGBwj/xAA7EAABAwIEBQIFAgUDAwUAAAABAAIDBBEFEiExBhNBUWEicQcUMoGRI6EVQrHB0TPh8CSC8RYlUmJy/8QAFwEBAQEBAAAAAAAAAAAAAAAAAAECA//EABsRAQEBAAMBAQAAAAAAAAAAAAABEQISIUEx/9oADAMBAAIRAxEAPwD2JMJBNFSCYSCYQNCAhAwhCEAmkhA0IQgEIQgEIQgEJJogQhCKEIQgEIQgEIQgoTCAgIJDZCEwgE0BCBoQEIBNJNAIQhAIQhAJJqBOmuiCSFz2O8V0eFMkDf15mC+XNlA8E2P9FzknxGkY+NrqOJxLcz2AvaW67XI1/ARHoia0OCcS0mKsaIw6GZwvynnp1seq3bX5kE0JJooQhCAQhFkFKkohSCATSTQMIQEIGhJNAJpIQNCEIBIppIhE2C1eOVT6ejLYSRLKcjSN29yPtdbN602LXfW0DGuAOZ7tR/8AUj+6K8ux+CpxXiU4Vg/pEcLH1NQ9v+mCCMoHU/zX8rZxcB1fJzx4vUGU+q8nqaTr0Pusqkgbg3HmL01SQ0YqW1FK92gdbQsB7gWXdRlgaGi22iDymGSfC8Q5VS1kFQx4jdldZrSR6XjwbfaxXqWB1/zlHDI43eRZxB0zdf6LzbjaqpariGWSnc1/IiZG5zRcFwLidR2uB9yuo4Hnc/DCS0gNnfYO33/yVB3LSpKuI3YFNVDQhCAQhCKpCYS62tui/udbaBBIJqBdbfQ9L9UB1xcHRBYEKIUJZo4WF80jI2Ddz3Bo/JQWouqxK11spuCLgjUFIzMDspd6rXDRqT9hqgtuhUc8ZsojlJ8sI/rZYEuO4fC8skrKZjw0OyPnbex8AlBtr+Ur+Vzj+MMEbWGkficDZwC4x5HlwaBe+1rWO6rp+LqKWqlpm1DJ3sJcOS1xOW1wSLadQmjppJWRgGSRrATYZnAXKM2tlx9Pxbg1biJ/Xh0jAZFNE7M11ySPpsCRf8K6hxmhppvl48SpZYnPLYGicZwB/KQba/2CeDqJHWHVaotNRjsbmtzR0sLi919nOtYfgFZIdUVIBgYA0g/qlwcB7WJur6CljpW8trXkucC+R28jrC5v+PwiMPEcHo8VgcyuginjP02/l7Fp3G+4XNYjw5VQCaOHFayWjy2bFJUEOae1x6jpY2912tnGUnVgsRqBr5/dYmJFkVHNKSz9OJxJLrAaXv7a3QeTVOGtw2CQyZhO5pipostszz0A3I0aST0vbqvQOGaGSloIIZPVLoZXd3HUrQ4FSyYvWx4rVNJbGzLShzbG3WQ+TfRd3RQiNgPUorLaLAW7KSTU0QJpJoBCEIOJ+IXFEvD1BG2kLW1VRmDHuFwxo3Nl5tHT8ZcRuLg+UQP1b8zM46HwDou9+JOHmb5KsfEZaeJ2SYN3a0/zBaMcaTYVQ86LCHVbSSA6OQNFhtftoo00DKjHeB6ymbUExQzOIZynExv6lpb33XqfD3FNJisLPW2OYjVhd9R8Hr18rxfiLH8T42rIYZ4oKOjpGvl5bXlwbbdxJsSbaAAdV03w7oYMVZLA2Z0ktHGwmAssXtINnWPTb8+SqWePYmyAjr3WkxnFaGlBqK6YR07GkNeTpe+tu/bTpdcbxBi0tLKaLCI4mCnsJql8QdldY3DegI01IPhclWxvq62BodPUNkglklzvN5PQWkAnUEk7eVm8jHZ0fF0NJCGYcOfT8x1nH6WtzaefK11ZxJjE8s8sFXyC/bILh1j9J10sPuub4cM0uCRNlySNaXsdc2IJBubb3G9wspwkYXCWVpmLtXizmsJ8HYG513+6za1jHxSurZ8pqa6oleXgtZJK57dN9Tt9uqsi58A+ZabUzHjM+M2zuO2u+vqtbdRnc+FsMTI4yxrS1uVgHMYSQSLbdPOgVdbUyVNKyOocflmlto2n06E7DruojHfUPh4npZZKdrzLCRYtaC43OpadjoL33WxmgMrmPge2BjXn9XcWHb86+y5+qqaoYrRyyvmlbDIeSXC+W5HpvudAt5STzZqt8GeNzTYP1aQD07b5h7XVGWI5WRSSHMGRFpf6iC8ki2V52OnTohzD8xLLO93OIc52ZxuDv73AGh/ChG4UzIYI2Oa+QHObkWuCLN2FtjY32UZCxrmyGxlDg1rchuwk7jsfPlQZ9JX1+GyuraEta8avcGC5F9Q/q+3S9/7r1PhrGYMew50sPokYcswDr5X7m3heRVk8ccEHPMYLiXaEhzzf6zb3W1+H1Y+i4yggjmLoq2AxzACwL2gFpH2B13WuLNeuucCzoCALhcvxFVPxOr/g9O88hlvnXt1BBFxHfudz4WfxJiUtHHDFRi9ZOS2ME/QOryNjbyqMGw4QxZHFz3El0kjzdz3HUuJ7kraM3DqRsbQLZQNABtZbNososbYWCsAQCaSAgaAhCBoQhBhyxNkbke0Fp0IXnvEfBnyxlqsJY4wyazUjeh6lt/6L0g6qDhcWIuivA/4M6SWRkYzx1bcjrCxb4+2/5079fwnw8zhTC8Qxh9RNiFZVUzm5j6eWxo2t1Oy6fHeHG1BkqaABlRu5uzZD/Y9LrTMklr6WooXx8iVrHXgcdG+ki3sco2F/V0UX9cKCKmoYZHllgWi/85vueztSb+FMHlsdA2NrY/AALXX3BGx397quSXPaTKA/UObtlcLjtqL/ALlAmIlMkIc1oeLvY76SNt/I2XPFYWAyhhrYI3PY2OUuzt/md5JuQbdR+FtaQujkhFQA2naT63AHNpYEgC3TUrT4S1xxysiM7GySNDo3DZ5+/gAfdbiiiE8L3c6MuaSSCct+4HY26aqip7KlgEl3N5zbva4gtuOwG1joPCxJJjK54YHAjQi1spvrbuLW163N1msfEJPWwuYSXWbe59v/AI3uP+arHmyujc36mvcWkkWuSdNuuqQa3GJ2tpx6mSPitIJi7XL7bWXRCsZLHHI8xh/LLnOERu4b2NtDuNPC1GMxRmgmgYQXOaGucYbDQX/7Tp03Ha+l+A1EfyNM8hzMwbnzZrs6XFt+qnw+s2tlgdc08PNNmhzd2kkjRp/OmmgKn6iA5tQ2OnbIGBxju697uAO4t/boq6qXlvtFM4Qsu/1HMQe7rAa21RK/5ocx1S0S5fRnb9Qt3B37AjsgxKrn1glkq5WkvaS4l1iNOh7ra/D2kvX1/ENRMYqSlBihfyw7PMSLhgP0nQDTe60eIGSRkLaOIumqcsUbHG5e/bXsB3tawXd8HYN8vh1PSiXn0lLK97JB9NTKSbzW7WsB9z1WuKVv8Jp6mqm+exMtdWzNAdkBDYmjZjf6nuSV1EMYjblba3hYmHxWObqs8LbKYCaimgaAkhBJCjdMFBIISCaCiwTshCKiW+brT4phDa4cwO5NSwfpyt1Pse48LdKJCDxrivA6ylrZKyCB75ngy1cAF2kNteSPS5OouOoBWppZo5jzWFgjkFmvDczXG4ALdPq6723C9vr6CKshMczbg7EGxae4Xj/F3BmNYRVz1OFMFRQS3cWsZYsPsP8ACzYrQQyil4ihqozzPRY3bYB19CR122WaXPc+UkGxZplOW47+/jZc1JPWSVrH/wAMqebHuzKRm1208XWW3CuKsTNm0k8UeuVjGkW7C6mLrZuqoYqYS1kzKd+S0YdKCCNtbW1t43WJLxZh8WaONhqmuAu1gNswG+ttrkdR5Ky8D+GeJzVLZcVwyR0Vy4xmcNLj0u4XNvbXyu3/APQLcQkpRV4dQ4dSU8Zb8vRAlz3HqXnUj/f7a6s68vq+IpqsZW0VQ5rg4AZhfYa2A33VVDXYpFSkfw2olpqZtiPU0tBOmtj5XtsHAGGUzGuoQ+lqGm4mjILh+brLdwo2Uk1ddVz5tHZn7+bAJ1hrwocRVkL/ANHDcgOmUyEkg97jsSr5cYrHl0EWE1HMOhGYEa9NtF7fTcGYPBe9MyR173frbwtnBg1DAP0qeNtuzUweUcJcK4tilfHiWKOlp2AOGRoy+k7tb116n9l6xS0zI2tZG0NaBYACwCymwAaAWCuYwN6hVE4m5WgK0Ku6lmsgndO61eN43QYFh767EZSyBhAOUZiSdrBQwPiHDseoWVmGTcyJx1DhZzD2I6INvdRJVZk0XHfEXikYHhppqaQfP1QysA3jb1d/hBsMY46wLCZnQT1JlnH1RwML7HsTsPytRTfFjApqgRmGsjYTbmPYwge4DifwvMeFsKpOIMSno62UlkLA7lZrGUk7nwu2xrgHAaXA5JWMEEsDMzXh3UIr1CjrIayBk9NIySJ4u1zDoQsleZ/CComOEyxPc50cdQQy47tBP7m/3XpXugqundV3RdBZdNV3UggLBRcwE7XU0IMY0cJdcxMv3y6pinaNmhZCaCgRNb0TyBTcQN1pMR4mw3D8QbQzySc8kD0MzBpOov8AYg/dBuDYbqisqoaOlkqah4ZFG3M5xSdWQthdLLIxsbRq9xsB91wXH3FGHz0Yw6GUva9wMhto4DYAb7ojp8E4ooMcZI+kD2FhALZQAT5FibhT4h4ipsApGVNTFLLmJsyIC9gLkrxPDuIa91W+Ond8u0ht5Gu9TW3I17bFVvnmzPfXSuqXub9Ttbjob9fvdS1ceiy/Ex0h/wCiwxri7YOmzH8ALU1XxIxp7g2CCCMEX9MZdc/crkWPbIwuja71M5hA1sNtP2RF9RDQMzfpPR3lZ7LjY4nx7xHbOa18bM1rMDW6nuOgV+F8WY3h8rqg1LpnzDLypnF4AHYe65/GKeWWglM8buaGZrEg6dk+bJVMpZbBrQ1pIN9dL7p2MdDxDxfW47hXy1c2ljYH5xYkEkf+VreHcYrsDc2toGtdCQWPjN7OtrY26rCy8wOktcl2gNrW1/2UI3C7xDoXEh2Uk5fdNMdpUfErFZ6X/p6SCmJH+sbut51XEV9XPPVSVFXK6apl/nkNybdFKfNlcRy7gaszbnudP2WNikL5MrnBpBdl9Gg7XCsqY1k76ikxG+d8NSw6uifY9rAgrqcCpMYxyp+W+cqJy/6zK8lsY8rnsNwySarh5hy55GtaXnUkm3919E8J4HS4XSCOBgsN39XutuqMrhXA4cHw6KniHpbrc7uJ3J8rfKLRopKjDupBRUggkApBIKSATSTQCRTSd43QctV8UObFI+npibSOjZmfuQbbDvZeb1tbLPidU+oLiS++YHfx9l6PW8HUk9Q6UVFSy8rpQ1kpGUuNzY7hcfxbg8GBz0jKZ0gimB+t5Oo90HP4pikha1hlke9h9F3FwZ7dtFqr+h9sgLrO0t9ypF7pDM1jg1olcPpvqD/j+qoe8RS5ommTUAuJHpHXbz1WKsjGfC2kxoxtkEkM8Nr2y3sWm46jYrOminDQRMHU7TlzW1B32J03WNijYmV2HPJzRseI3EnWzh1HuVlZMjX2k/SuA9oBGY2282uoqr0RtEREbGE5ibfy31VUmU5M7pACbNPa6t5TZCG572b1bo3Xyqw6Vw5ZDzGBYNdewPXRBEua+OZpDSbnNprf/llRRNk+RpmvicA+7WkM0OVxacp/H4WZGyWzrOcG3Oh067HX2/CwMMIE1QJHPc1k5A1sWkga/n+qDYTSE5ml7c4IAaQb2/4P3VDnvi/WaWt5Z9TRqP8AdWSOc5+dpaDqSWnZNhBc3RmpIN7WNwUEM8cjmZ3FgldZ3pBzEn9tVCpYWQlwADMwvmGpVoDaYudEWhpbrcab9fx0VsGF1mJ1XLw+nLzo+VwIsO26SFdX8OMMosQqJ56qma+aCRvLc43t12XsVNE2OJrWrzj4a8N1uETVEla/WbKA3NmtZemMFgB2W2UwE0BCowwpBRUggkFJRCYKBphJCBppBCBEBcB8Wof/AGmlqLX5NRqf/wBAhegLU8S4JT8QYXLQVLnsZJY5mGxBBvcIPn2SZ8VSA4Ex1GrTc6kW0WXTC7S15MbGuAlIbewuLe/e1+i9CqfhlTGhNPHWT3abte62h6FebYjQ1uHYlJQ4sCHgl7SPpm7OusWNSqMaDYow6mDmtjmEmp0uNdB9gtnUXAcXN5rXA5cjjo63XW51t7rCxCNpoHNYSGtZoXd+vTbT91KnY/5Gnc54HNj9Njrpvcf5UFv60MjnOaxrnxghrwCLeOx3VeSwdG8uzZiGDKGkm/boqDjEcbHQOlE8WbRmUEt9jusT+Ivc12Slle65LXOIA/ymUbOQhwAnIDm6n+Y+61cchbWVXLY2zmNdrrcgnX90CrxaVpyQMDN3EXd06/YLFdT1VQ7mc5mexHojJvt29grONS1tBlfOXB2UkEFoFgVbPGZWZuWxoJaMrNj2CxKTDcbeM1M18jj1FOSVtKbhni6qLWikZZwtml9Nh7JhrCbIwMc8kuBdlsQbjtYe/Rer8E4GcKwaJkkYbUS/qS2Otz0+y1HCPw8kpamOtxyf5iaM3jhbpGw9/JXpEFPaysiLqCHI3NbdZzQoMblAHRWBaEkJIQYYUgopoJJgpBCCQKaiEwgkEJBMIGkUIQQc260HFPC9DxDSCKrYQ9hzRys0cwroCVWVB41iPw8x+IOjp5qeqhIy53+l1uxWNH8Mcbl/1p42Mv8ATzDp+AvbLXKiW6qLryui+Fr2ACSsjjA0/Ti/yt5RfDTDYJY5J5Jpy1wdZxs0/Zd01uqsC0jVw4NRxR8tlNG1lrWDBaycOCYfDbl0cLT4jC2iE9GMyljYLMjaPYKwQjsFamFBBsY7K1rQBskAphA1IJBCoaEIQYSkFFMIuJBNAQiBSSQEEgmkjqgaCmkVBEqKmVGyCJCAE7J2QIBNOyECTRZNUJMJJ2UDUgoqQQSCEBCoE7JJoP/Z"
                            alt="Kampas Rem"
                        />
                        <h3>Kampas Rem</h3>
                        <p>Kualitas premium, cocok untuk motor harian.</p>
                    </div>
                    <div class="card">
                        <img
                            src="data:image/jpeg;base64,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"
                            alt="Oli Mesin"
                        />
                        <h3>Oli Mesin</h3>
                        <p>Oli berkualitas tinggi untuk performa maksimal.</p>
                    </div>
                    <div class="card">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRacIhXzvs2vNaJof2eusJvOHmZ4Np0g1bLqg&s"
                            alt="Rantai Motor"
                        />
                        <h3>Rantai Motor</h3>
                        <p>Tahan lama dan kuat, untuk semua jenis motor.</p>
                    </div>
                    <div class="card">
                        <img
                            src="https://down-id.img.susercontent.com/file/8821ae84fd166272b77d6195217cf404"
                            alt="Aksesoris Motor"
                        />
                        <h3>Aksesoris Motor</h3>
                        <p>
                            Percantik tampilan motor Anda dengan aksesoris
                            terbaik.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        

        <!-- Testimonials Section -->
        <section class="testimonials">
            <div class="container">
                <h2>Apa Kata Mereka</h2>
                <div class="testimonial-cards">
                    <div class="testimonial-card">
                        <p>
                            "Pelayanan cepat, barang berkualitas. Sparepart yang
                            saya beli sangat cocok untuk motor saya!"
                        </p>
                        <h4>- Agus, Jakarta</h4>
                    </div>
                    <div class="testimonial-card">
                        <p>
                            "Produk sesuai deskripsi dan kualitasnya bagus, saya
                            sangat puas dengan pembelian ini."
                        </p>
                        <h4>- Budi, Bandung</h4>
                    </div>
                    <div class="testimonial-card">
                        <p>
                            "Harga terjangkau dan pelayanan ramah. Saya pasti
                            akan beli lagi di sini."
                        </p>
                        <h4>- Siti, Surabaya</h4>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <p>&copy; 2024 Toko Sparepart Motor. All Rights Reserved.</p>
        </footer>

        <!-- Popup -->
        <div id="popup" class="popup-box">
            <div class="popup-content">
                <span class="close-popup">&times;</span>
                <h3>Produk Terbaru</h3>
                <p>
                    Berbagai sparepart motor terbaru telah tersedia, termasuk
                    kampas rem, oli mesin, rantai motor, dan aksesoris lainnya.
                    Kunjungi toko kami sekarang!
                </p>
            </div>
        </div>

    <script src="script.js"></script>
</body>
</html>