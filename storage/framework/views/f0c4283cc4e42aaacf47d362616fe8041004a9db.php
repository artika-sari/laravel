<link rel="stylesheet" href="../css/style.css">
<?php if (isset($component)) { $__componentOriginal08d9d46900ea68d5dc06d8728734a2fd47ca153c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Navbar::class, []); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal08d9d46900ea68d5dc06d8728734a2fd47ca153c)): ?>
<?php $component = $__componentOriginal08d9d46900ea68d5dc06d8728734a2fd47ca153c; ?>
<?php unset($__componentOriginal08d9d46900ea68d5dc06d8728734a2fd47ca153c); ?>
<?php endif; ?>
<div class="container">
            
            <aside class="item1">
                <h1>Artika Sari Noor Cahayani</h1>
                <img src="../poto/haechan.jpeg" alt="">
                <p>i love anything about Haechan</p>
            </aside>

            <article class="item1">
                <h1 id="biodata">Biodata</h1>
                <p>Tanggal lahir: 16 Januari 2008<br>Jenis kelamin: Perempuan<br>Tempat tinggal: Jl. Bantar Kemang No. 84G RT01/07 
                <br>Zodiak: Capricorn</p>
            </article>
            
            <article class="item1">
                <h1 id="pendidikan">Pendidikan</h1>
                <p>Sekolah Menengah Kejuruan: SMK Wikrama Bogor<br>Sekolah Menengah Pertama: SMPN 10 Bogor<br>Sekolah Dasar: SDN Lawanggintung 2 Bogor
                <br>Taman Kanak-Kanak: </p>
            </article>

            <article class="item1">
                <h1 id="Kontaksaya">Kontak Saya</h1>
                <p>No.Telp: 085770664566<br>Instagram: @ar.ttikasr<br>Twitter: @morkieesslee
                <br>Facebook: Artika Sari</p>
            </article>

            <article class="item1">
                <h1 id="kemampuan">Kemampuan</h1>
                <p>HTML<br>CSS<br>JavaScript
                </p>
            </article>

            <article class="item2">
                <h1 id="pencapaian">Pencapaian</h1>
                <img src="../poto/serti.png" alt="">

            </article>
            
        </div>
        <?php if (isset($component)) { $__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Footer::class, []); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf)): ?>
<?php $component = $__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf; ?>
<?php unset($__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf); ?>
<?php endif; ?>   <?php /**PATH /Users/hcn/Documents/laravel/testproject/resources/views/home.blade.php ENDPATH**/ ?>