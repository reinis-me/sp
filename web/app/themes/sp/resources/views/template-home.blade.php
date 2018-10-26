{{--
  Template Name: Homepage
--}}

@extends('layouts.app')

@section('content')
    {{--@while(have_posts()) @php(the_post())--}}
    {{--@include('partials.page-header')--}}
    {{--@include('partials.content-page')--}}
    {{--@endwhile--}}

    <section class="top-banner-holder">
        <div class="container"></div>
    </section>
    <section class="first-articles">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="content-block home-articles">
                        <h2>New</h2>

                        <div class="row">

                            <?php $args = array(
                                'posts_per_page' => 4,
                                'offset' => 0,
                                'category' => '',
                                'category_name' => '',
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'include' => '',
                                'exclude' => '',
                                'meta_key' => '',
                                'meta_value' => '',
                                'post_type' => 'post',
                                'post_mime_type' => '',
                                'post_parent' => '',
                                'author' => '',
                                'author_name' => '',
                                'post_status' => 'publish',
                                'suppress_filters' => true,
                                'fields' => '',
                            );

                            $i = 1;
                            $posts_array = get_posts($args);

                            foreach ($posts_array as &$post_item) {

                            $image_large = wp_get_attachment_image_url(get_post_thumbnail_id($post_item->ID), 'large');
                            $image_medium = wp_get_attachment_image_url(get_post_thumbnail_id($post_item->ID), 'medium');

                            if ($i == 1) {

                            ?>
                            <div class="col-12">
                                <div class="main-article">
                                    <div class="main-article-image">
                                        <a href="<?php echo get_permalink($post_item->ID); ?>"
                                           title="<?php echo $post_item->post_title; ?>">
                                            <img src="<?php echo $image_large; ?>"
                                                 alt="<?php echo $post_item->post_title; ?>"/>
                                        </a>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-8">
                                            <h1>
                                                <a href="<?php echo get_permalink($post_item->ID); ?>"
                                                   title="<?php echo $post_item->post_title; ?>">
                                                    <?php echo $post_item->post_title; ?>
                                                </a>
                                            </h1>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="excerpt"><?php echo get_the_excerpt($post_item->ID); ?></div>
                                            <div class="categories">
                                                <?php
                                                $post_cats = wp_get_post_categories($post_item->ID);

                                                foreach ($post_cats as &$post_cat) {
                                                ?>
                                                <a href="<?php echo get_category_link($post_cat); ?>"
                                                   class="category-link"><?php echo get_cat_name($post_cat); ?></a>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            } else {
                            ?>
                            <div class="col-12 col-md-4">
                                <div class="secondary-article">
                                    <h3>
                                        <a href="<?php echo get_permalink($post_item->ID); ?>"
                                           title="<?php echo $post_item->post_title; ?>">
                                            <?php echo $post_item->post_title; ?>
                                        </a>
                                    </h3>

                                    <div class="secondary-article-image"
                                         style="background-image: url(<?php echo $image_medium; ?>)">

                                        <div class="overlay">
                                            <div class="categories">
                                                <?php
                                                $post_cats = wp_get_post_categories($post_item->ID);

                                                foreach ($post_cats as &$post_cat) {
                                                ?>
                                                <a href="<?php echo get_category_link($post_cat); ?>"
                                                   class="category-link"><?php echo get_cat_name($post_cat); ?></a>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                            <a href="<?php echo get_permalink($post_item->ID); ?>"
                                               title="<?php echo $post_item->post_title; ?>">
                                                <div class="excerpt"><?php echo get_the_excerpt($post_item->ID); ?></div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }


                            $i++;
                            }

                            ?>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-3 offset-lg-1">
                    <div class="content-block">
                        <h2>This week's love</h2>
                        <div class="weekly-love-items">
                            <div class="weekly-love-item">
                                <div class="number">01</div>
                                <div class="content">Nullam neque elit, pharetra quis nibh sed</div>
                            </div>
                            <div class="weekly-love-item">
                                <div class="number">02</div>
                                <div class="content">Donec purus risus, cursus eget ullamcorper sit amet</div>
                            </div>
                            <div class="weekly-love-item">
                                <div class="number">03</div>
                                <div class="content">Phasellus euismod</div>
                            </div>
                            <div class="weekly-love-item">
                                <div class="number">04</div>
                                <div class="content">Aenean porta, felis sit amet</div>
                            </div>
                            <div class="weekly-love-item">
                                <div class="number">05</div>
                                <div class="content">Morbi fermentum laoreet justo eu mollis</div>
                            </div>
                        </div>
                    </div>
                    <div class="content-block">
                        <h2>Reader's highlight</h2>
                        <div class="highlight-items">
                            <div class="highlight-item">
                                <div class="highlight-content">In malesuada bibendum luctus. In sit amet lobortis
                                    lacus.
                                </div>
                                <a href="#" class="highlight-origin">Praesent eu dignissim neque</a>
                            </div>
                            <div class="highlight-item">
                                <div class="highlight-content">Duis maximus vulputate tristique. Donec purus risus,
                                    cursus eget ullamcorper sit amet, placerat vitae leo.
                                </div>
                                <a href="#" class="highlight-origin">Vivamus elit elit</a>
                            </div>
                            <div class="highlight-item">
                                <div class="highlight-content">Nulla vehicula vestibulum nunc, vel ullamcorper purus
                                    ornare eget. Pellentesque porta pretium ante. Nam vel malesuada nunc.
                                </div>
                                <a href="#" class="highlight-origin">Aenean tempor ante ut tellus suscipit </a>
                            </div>
                            <div class="highlight-item">
                                <div class="highlight-content">Morbi ullamcorper augue ex, in iaculis sapien convallis
                                    quis.
                                </div>
                                <a href="#" class="highlight-origin">Phasellus euismod, nisi sit amet</a>
                            </div>
                            <div class="highlight-item">
                                <div class="highlight-content">Curabitur elementum ligula id tincidunt sagittis. Mauris
                                    vulputate ornare nulla vel pellentesque.
                                </div>
                                <a href="#" class="highlight-origin">Nulla volutpat feugiats</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="spotlight-holder">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-block">
                        <h2>In spotlight</h2>

                        <div class="spotlight-items">

                            <?php
                            foreach ($posts_array as &$post_item) {

                            $image_large = wp_get_attachment_image_url(get_post_thumbnail_id($post_item->ID), 'large');
                            $image_medium = wp_get_attachment_image_url(get_post_thumbnail_id($post_item->ID), 'medium');
                            ?>
                            <div>
                                <div class="spotlight-item">
                                    <div class="row">
                                        <div class="col-12 col-lg-8">
                                            <div class="spotlight-article-image">
                                                <img src="<?php echo $image_large; ?>"
                                                     alt="<?php echo $post_item->post_title; ?>"/>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <h2>
                                                <a href="<?php echo get_permalink($post_item->ID); ?>"
                                                   title="<?php echo $post_item->post_title; ?>">
                                                    <?php echo $post_item->post_title; ?>
                                                </a>
                                            </h2>
                                            <div class="excerpt"><?php echo get_the_excerpt($post_item->ID); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="else-holder">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-block">
                        <h2>Everything else</h2>

                        <div class="else-items">

                            <div class="row">

                                <div class="else-item col-6 col-md-4">
                                    <div class="else-item-full" style="background: #E4EBE6"></div>
                                </div>

                                <div class="else-item col-6 col-md-4">
                                    <div class="else-item-article">
                                        <div class="else-item-article-image" style="background-image: url(https://i.imgur.com/amuoArO.jpg)"></div>
                                        <h4 class="else-item-article-title">Lorem ipsum dolor sit amet</h4>
                                        <div class="else-item-article-excerpt">Quisque et risus ut magna consectetur aliquet. Etiam ullamcorper ante non metus tincidunt maximus. </div>
                                        <div class="else-item-article-categories"><a href="#" class="category-link">Lorem</a></div>
                                        <div class="else-item-article-meta">25.09.18.</div>
                                    </div>
                                </div>
                                <div class="else-item col-6 col-md-4">
                                    <div class="else-item-article">
                                        <div class="else-item-article-image" style="background-image: url(https://i.imgur.com/amuoArO.jpg)"></div>
                                        <h4 class="else-item-article-title">Lorem ipsum dolor sit amet</h4>
                                        <div class="else-item-article-excerpt">Quisque et risus ut magna consectetur aliquet. Etiam ullamcorper ante non metus tincidunt maximus. </div>
                                        <div class="else-item-article-categories"><a href="#" class="category-link">Lorem</a></div>
                                        <div class="else-item-article-meta">25.09.18.</div>
                                    </div>
                                </div>
                                <div class="else-item col-6 col-md-4">
                                    <div class="else-item-article">
                                        <div class="else-item-article-image" style="background-image: url(https://i.imgur.com/amuoArO.jpg)"></div>
                                        <h4 class="else-item-article-title">Lorem ipsum dolor sit amet</h4>
                                        <div class="else-item-article-excerpt">Quisque et risus ut magna consectetur aliquet. Etiam ullamcorper ante non metus tincidunt maximus. </div>
                                        <div class="else-item-article-categories"><a href="#" class="category-link">Lorem</a></div>
                                        <div class="else-item-article-meta">25.09.18.</div>
                                    </div>
                                </div>      <div class="else-item col-6 col-md-4">
                                    <div class="else-item-article">
                                        <div class="else-item-article-image" style="background-image: url(https://i.imgur.com/amuoArO.jpg)"></div>
                                        <h4 class="else-item-article-title">Lorem ipsum dolor sit amet</h4>
                                        <div class="else-item-article-excerpt">Quisque et risus ut magna consectetur aliquet. Etiam ullamcorper ante non metus tincidunt maximus. </div>
                                        <div class="else-item-article-categories"><a href="#" class="category-link">Lorem</a></div>
                                        <div class="else-item-article-meta">25.09.18.</div>
                                    </div>
                                </div>
                                <div class="else-item col-6 col-md-4">
                                    <div class="else-item-article">
                                        <div class="else-item-article-image" style="background-image: url(https://i.imgur.com/amuoArO.jpg)"></div>
                                        <h4 class="else-item-article-title">Lorem ipsum dolor sit amet</h4>
                                        <div class="else-item-article-excerpt">Quisque et risus ut magna consectetur aliquet. Etiam ullamcorper ante non metus tincidunt maximus. </div>
                                        <div class="else-item-article-categories"><a href="#" class="category-link">Lorem</a></div>
                                        <div class="else-item-article-meta">25.09.18.</div>
                                    </div>
                                </div>
                                <div class="else-item col-6 col-md-4">
                                    <div class="else-item-full" style="background: #D29D64"></div>
                                </div>

                                <div class="else-item col-6 col-md-4">
                                    <div class="else-item-article">
                                        <div class="else-item-article-image" style="background-image: url(https://i.imgur.com/amuoArO.jpg)"></div>
                                        <h4 class="else-item-article-title">Lorem ipsum dolor sit amet</h4>
                                        <div class="else-item-article-excerpt">Quisque et risus ut magna consectetur aliquet. Etiam ullamcorper ante non metus tincidunt maximus. </div>
                                        <div class="else-item-article-categories"><a href="#" class="category-link">Lorem</a></div>
                                        <div class="else-item-article-meta">25.09.18.</div>
                                    </div>
                                </div>
                                <div class="else-item col-6 col-md-4">
                                    <div class="else-item-article">
                                        <div class="else-item-article-image" style="background-image: url(https://i.imgur.com/amuoArO.jpg)"></div>
                                        <h4 class="else-item-article-title">Lorem ipsum dolor sit amet</h4>
                                        <div class="else-item-article-excerpt">Quisque et risus ut magna consectetur aliquet. Etiam ullamcorper ante non metus tincidunt maximus. </div>
                                        <div class="else-item-article-categories"><a href="#" class="category-link">Lorem</a></div>
                                        <div class="else-item-article-meta">25.09.18.</div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
