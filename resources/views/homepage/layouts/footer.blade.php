<section id="footer">
    <div class="container">
        <div class="row">
            <div class="footer clearfix">
                <div class="col-sm-3">
                    <div class="footer_1">
                        <img src="{{ getPengaturan()->logo ?? '' }}" width="50%" height="50%">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer_2">
                        <h4>Kontak</h4>
                        <p style="color: #666666; font-size: medium;">
                            <i class="fa fa-phone" aria-hidden="true"></i> {{ getPengaturan()->phone ?? '' }}<br>
                            <i class="fa fa-envelope" aria-hidden="true"></i> {{ getPengaturan()->email ?? '' }}
                        </p>
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7145421476966!2d116.98817421521285!3d-0.413252099698494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefd754ca7a261%3A0xcba79091a2b622bd!2sMuseum%20Mulawarman!5e0!3m2!1sid!2sid!4v1654261313069!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer_2">
                        <h4>Alamat</h4>
                        <p style="color: #666666;">{{ getPengaturan()->address ?? '' }}</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer_2">
                        <h4>Media Sosial</h4>
                        <p style="font-size: 24pt;">
                            <a href="{{ getPengaturan()->instagram ?? '' }}" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="{{ getPengaturan()->youtube ?? '' }}" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="https://wa.me/{{ convertWhatsappNumber(getPengaturan()->whatsapp) ?? '' }}" target="_blank"><i class="fa fa-whatsapp"></i></a>
                            <a href="mailto:{{ getPengaturan()->email ?? '' }}" target="_blank"><i class="fa fa-envelope"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <p> © <?php echo date('Y') ?> Museum Mulawarman. All Rights Reserved</p>
            </div>
        </div>
    </div>
</section>