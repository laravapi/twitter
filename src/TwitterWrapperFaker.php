<?php

namespace LaravelApi\Twitter;

class TwitterWrapperFaker
{
    public function tweet(string $status): object
    {
        return (object)[
            "created_at" => "Wed Oct 10 20:19:24 +0000 2018",
            "id" => 1050118621198921700,
            "id_str" => "1050118621198921728",
            "text" => "To make room for more expression, we will now count all emojis as equal—including those with gender‍‍‍ ‍‍and skin t… https://t.co/MkGjXf9aXm",
            "source" => "<a href=\"http://twitter.com\" rel=\"nofollow\">Twitter Web Client</a>",
            "truncated" => true,
            "in_reply_to_status_id" => null,
            "in_reply_to_status_id_str" => null,
            "in_reply_to_user_id" => null,
            "in_reply_to_user_id_str" => null,
            "in_reply_to_screen_name" => null,
            "user" => [
                "id" => 6253282,
                "id_str" => "6253282",
                "name" => "Twitter API",
                "screen_name" => "TwitterAPI",
                "location" => "San Francisco, CA",
                "url" => "https://developer.twitter.com",
                "description" => "The Real Twitter API. Tweets about API changes, service issues and our Developer Platform. Don't get an answer? It's on my website.",
                "translator_type" => "null",
                "derived" => [
                    "locations" => [
                        [
                            "country" => "United States",
                            "country_code" => "US",
                            "locality" => "San Francisco",
                            "region" => "California",
                            "sub_region" => "San Francisco County",
                            "full_name" => "San Francisco, California, United States",
                            "geo" => [
                                "coordinates" => [
                                    -122.41942,
                                    37.77493
                                ],
                                "type" => "point"
                            ]
                        ]
                    ]
                ],
                "protected" => false,
                "verified" => true,
                "followers_count" => 6172196,
                "friends_count" => 12,
                "listed_count" => 13003,
                "favourites_count" => 31,
                "statuses_count" => 3650,
                "created_at" => "Wed May 23 06:01:13 +0000 2007",
                "utc_offset" => null,
                "time_zone" => null,
                "geo_enabled" => false,
                "lang" => "en",
                "contributors_enabled" => false,
                "is_translator" => null,
                "profile_background_color" => "null",
                "profile_background_image_url" => "null",
                "profile_background_image_url_https" => "null",
                "profile_background_tile" => null,
                "profile_link_color" => "null",
                "profile_sidebar_border_color" => "null",
                "profile_sidebar_fill_color" => "null",
                "profile_text_color" => "null",
                "profile_use_background_image" => null,
                "profile_image_url" => "null",
                "profile_image_url_https" => "https://pbs.twimg.com/profile_images/942858479592554497/BbazLO9L_normal.jpg",
                "profile_banner_url" => "https://pbs.twimg.com/profile_banners/6253282/1497491515",
                "default_profile" => false,
                "default_profile_image" => false,
                "following" => null,
                "follow_request_sent" => null,
                "notifications" => null
            ],
            "geo" => null,
            "coordinates" => null,
            "place" => null,
            "contributors" => null,
            "is_quote_status" => false,
            "extended_tweet" => [
                "full_text" => "To make room for more expression, we will now count all emojis as equal—including those with gender‍‍‍ ‍‍and skin tone modifiers 👍🏻👍🏽👍🏿. This is now reflected in Twitter-Text, our Open Source library. nnUsing Twitter-Text? See the forum post for detail: https://t.co/Nx1XZmRCXA",
                "display_text_range" => [
                    0,
                    277
                ],
                "entities" => [
                    "hashtags" => [
                    ],
                    "urls" => [
                        [
                            "url" => "https://t.co/Nx1XZmRCXA",
                            "expanded_url" => "https://twittercommunity.com/t/new-update-to-the-twitter-text-library-emoji-character-count/114607",
                            "display_url" => "twittercommunity.com/t/new-update-t…",
                            "unwound" => [
                                "url" => "https://twittercommunity.com/t/new-update-to-the-twitter-text-library-emoji-character-count/114607",
                                "status" => 200,
                                "title" => "New update to the Twitter-Text library: Emoji character count",
                                "description" => "Over the years, we have made several updates to the way that people can communicate on Twitter. One of the more notable changes made last year was to increase the number of characters per Tweet from 140 to 280 characters. Today, we continue to expand people’s ability to express themselves by announcing a change to the way that we count emojis. Due to the differences in the way written text and emojis are encoded, many emojis (including emojis where you can apply gender and skin tone) have count..."
                            ],
                            "indices" => [
                                254,
                                277
                            ]
                        ]
                    ],
                    "user_mentions" => [
                    ],
                    "symbols" => [
                    ]
                ]
            ],
            "quote_count" => 0,
            "reply_count" => 0,
            "retweet_count" => 0,
            "favorite_count" => 0,
            "entities" => [
                "hashtags" => [
                ],
                "urls" => [
                    [
                        "url" => "https://t.co/MkGjXf9aXm",
                        "expanded_url" => "https://twitter.com/i/web/status/1050118621198921728",
                        "display_url" => "twitter.com/i/web/status/1…",
                        "indices" => [
                            117,
                            140
                        ]
                    ]
                ],
                "user_mentions" => [
                ],
                "symbols" => [
                ]
            ],
            "favorited" => false,
            "retweeted" => false,
            "possibly_sensitive" => false,
            "filter_level" => "low",
            "lang" => "en"
        ];
    }

    public function search(string $searchTerm): object
    {
        return (object)[
            "statuses" => [
                [
                    "created_at" => "Sun Feb 25 18:11:01 +0000 2018",
                    "id" => 967824267948773377,
                    "id_str" => "967824267948773377",
                    "text" => "From pilot to astronaut, Robert H. Lawrence was the first African-American to be selected as an astronaut by any na… https://t.co/FjPEWnh804",
                    "truncated" => true,
                    "entities" => [
                        "hashtags" => [
                        ],
                        "symbols" => [
                        ],
                        "user_mentions" => [
                        ],
                        "urls" => [
                            [
                                "url" => "https://t.co/FjPEWnh804",
                                "expanded_url" => "https://twitter.com/i/web/status/967824267948773377",
                                "display_url" => "twitter.com/i/web/status/9…",
                                "indices" => [
                                    117,
                                    140
                                ]
                            ]
                        ]
                    ],
                    "metadata" => [
                        "result_type" => "popular",
                        "iso_language_code" => "en"
                    ],
                    "source" => "<a href=\"https: //www.sprinklr.com\" rel=\"nofollow\">Sprinklr</a>",
                    "in_reply_to_status_id" => null,
                    "in_reply_to_status_id_str" => null,
                    "in_reply_to_user_id" => null,
                    "in_reply_to_user_id_str" => null,
                    "in_reply_to_screen_name" => null,
                    "user" => [
                        "id" => 11348282,
                        "id_str" => "11348282",
                        "name" => "NASA",
                        "screen_name" => "NASA",
                        "location" => "",
                        "description" => "Explore the universe and discover our home planet with @NASA. We usually post in EST (UTC-5)",
                        "url" => "https://t.co/TcEE6NS8nD",
                        "entities" => [
                            "url" => [
                                "urls" => [
                                    [
                                        "url" => "https://t.co/TcEE6NS8nD",
                                        "expanded_url" => "http://www.nasa.gov",
                                        "display_url" => "nasa.gov",
                                        "indices" => [
                                            0,
                                            23
                                        ]
                                    ]
                                ]
                            ],
                            "description" => [
                                "urls" => [
                                ]
                            ]
                        ],
                        "protected" => false,
                        "followers_count" => 28605561,
                        "friends_count" => 270,
                        "listed_count" => 90405,
                        "created_at" => "Wed Dec 19 20:20:32 +0000 2007",
                        "favourites_count" => 2960,
                        "utc_offset" => -18000,
                        "time_zone" => "Eastern Time (US & Canada)",
                        "geo_enabled" => false,
                        "verified" => true,
                        "statuses_count" => 50713,
                        "lang" => "en",
                        "contributors_enabled" => false,
                        "is_translator" => false,
                        "is_translation_enabled" => false,
                        "profile_background_color" => "000000",
                        "profile_background_image_url" => "http://pbs.twimg.com/profile_background_images/590922434682880000/3byPYvqe.jpg",
                        "profile_background_image_url_https" => "https://pbs.twimg.com/profile_background_images/590922434682880000/3byPYvqe.jpg",
                        "profile_background_tile" => false,
                        "profile_image_url" => "http://pbs.twimg.com/profile_images/188302352/nasalogo_twitter_normal.jpg",
                        "profile_image_url_https" => "https://pbs.twimg.com/profile_images/188302352/nasalogo_twitter_normal.jpg",
                        "profile_banner_url" => "https://pbs.twimg.com/profile_banners/11348282/1518798395",
                        "profile_link_color" => "205BA7",
                        "profile_sidebar_border_color" => "000000",
                        "profile_sidebar_fill_color" => "F3F2F2",
                        "profile_text_color" => "000000",
                        "profile_use_background_image" => true,
                        "has_extended_profile" => true,
                        "default_profile" => false,
                        "default_profile_image" => false,
                        "following" => null,
                        "follow_request_sent" => null,
                        "notifications" => null,
                        "translator_type" => "regular"
                    ],
                    "geo" => null,
                    "coordinates" => null,
                    "place" => null,
                    "contributors" => null,
                    "is_quote_status" => false,
                    "retweet_count" => 988,
                    "favorite_count" => 3875,
                    "favorited" => false,
                    "retweeted" => false,
                    "possibly_sensitive" => false,
                    "lang" => "en"
                ],
                [
                    "created_at" => "Sun Feb 25 19:31:07 +0000 2018",
                    "id" => 967844427480911872,
                    "id_str" => "967844427480911872",
                    "text" => "A magnetic power struggle of galactic proportions - new research highlights the role of the Sun's magnetic landscap… https://t.co/29dZgga54m",
                    "truncated" => true,
                    "entities" => [
                        "hashtags" => [
                        ],
                        "symbols" => [
                        ],
                        "user_mentions" => [
                        ],
                        "urls" => [
                            [
                                "url" => "https://t.co/29dZgga54m",
                                "expanded_url" => "https://twitter.com/i/web/status/967844427480911872",
                                "display_url" => "twitter.com/i/web/status/9…",
                                "indices" => [
                                    117,
                                    140
                                ]
                            ]
                        ]
                    ],
                    "metadata" => [
                        "result_type" => "popular",
                        "iso_language_code" => "en"
                    ],
                    "source" => "<a href=\"https: //www.sprinklr.com\" rel=\"nofollow\">Sprinklr</a>",
                    "in_reply_to_status_id" => null,
                    "in_reply_to_status_id_str" => null,
                    "in_reply_to_user_id" => null,
                    "in_reply_to_user_id_str" => null,
                    "in_reply_to_screen_name" => null,
                    "user" => [
                        "id" => 11348282,
                        "id_str" => "11348282",
                        "name" => "NASA",
                        "screen_name" => "NASA",
                        "location" => "",
                        "description" => "Explore the universe and discover our home planet with @NASA. We usually post in EST (UTC-5)",
                        "url" => "https://t.co/TcEE6NS8nD",
                        "entities" => [
                            "url" => [
                                "urls" => [
                                    [
                                        "url" => "https://t.co/TcEE6NS8nD",
                                        "expanded_url" => "http://www.nasa.gov",
                                        "display_url" => "nasa.gov",
                                        "indices" => [
                                            0,
                                            23
                                        ]
                                    ]
                                ]
                            ],
                            "description" => [
                                "urls" => [
                                ]
                            ]
                        ],
                        "protected" => false,
                        "followers_count" => 28605561,
                        "friends_count" => 270,
                        "listed_count" => 90405,
                        "created_at" => "Wed Dec 19 20:20:32 +0000 2007",
                        "favourites_count" => 2960,
                        "utc_offset" => -18000,
                        "time_zone" => "Eastern Time (US & Canada)",
                        "geo_enabled" => false,
                        "verified" => true,
                        "statuses_count" => 50713,
                        "lang" => "en",
                        "contributors_enabled" => false,
                        "is_translator" => false,
                        "is_translation_enabled" => false,
                        "profile_background_color" => "000000",
                        "profile_background_image_url" => "http://pbs.twimg.com/profile_background_images/590922434682880000/3byPYvqe.jpg",
                        "profile_background_image_url_https" => "https://pbs.twimg.com/profile_background_images/590922434682880000/3byPYvqe.jpg",
                        "profile_background_tile" => false,
                        "profile_image_url" => "http://pbs.twimg.com/profile_images/188302352/nasalogo_twitter_normal.jpg",
                        "profile_image_url_https" => "https://pbs.twimg.com/profile_images/188302352/nasalogo_twitter_normal.jpg",
                        "profile_banner_url" => "https://pbs.twimg.com/profile_banners/11348282/1518798395",
                        "profile_link_color" => "205BA7",
                        "profile_sidebar_border_color" => "000000",
                        "profile_sidebar_fill_color" => "F3F2F2",
                        "profile_text_color" => "000000",
                        "profile_use_background_image" => true,
                        "has_extended_profile" => true,
                        "default_profile" => false,
                        "default_profile_image" => false,
                        "following" => null,
                        "follow_request_sent" => null,
                        "notifications" => null,
                        "translator_type" => "regular"
                    ],
                    "geo" => null,
                    "coordinates" => null,
                    "place" => null,
                    "contributors" => null,
                    "is_quote_status" => false,
                    "retweet_count" => 2654,
                    "favorite_count" => 7962,
                    "favorited" => false,
                    "retweeted" => false,
                    "possibly_sensitive" => false,
                    "lang" => "en"
                ],
                [
                    "created_at" => "Mon Feb 26 19:21:43 +0000 2018",
                    "id" => 968204446625869827,
                    "id_str" => "968204446625869827",
                    "text" => "Someone's got to be first. In space, the first explorers beyond Mars were Pioneers 10 and 11, twin robots who chart… https://t.co/SUX30Y45mr",
                    "truncated" => true,
                    "entities" => [
                        "hashtags" => [
                        ],
                        "symbols" => [
                        ],
                        "user_mentions" => [
                        ],
                        "urls" => [
                            [
                                "url" => "https://t.co/SUX30Y45mr",
                                "expanded_url" => "https://twitter.com/i/web/status/968204446625869827",
                                "display_url" => "twitter.com/i/web/status/9…",
                                "indices" => [
                                    117,
                                    140
                                ]
                            ]
                        ]
                    ],
                    "metadata" => [
                        "result_type" => "popular",
                        "iso_language_code" => "en"
                    ],
                    "source" => "<<a href=\"https: //www.sprinklr.com\" rel=\"nofollow\">Sprinklr</a>",
                    "in_reply_to_status_id" => null,
                    "in_reply_to_status_id_str" => null,
                    "in_reply_to_user_id" => null,
                    "in_reply_to_user_id_str" => null,
                    "in_reply_to_screen_name" => null,
                    "user" => [
                        "id" => 11348282,
                        "id_str" => "11348282",
                        "name" => "NASA",
                        "screen_name" => "NASA",
                        "location" => "",
                        "description" => "Explore the universe and discover our home planet with @NASA. We usually post in EST (UTC-5)",
                        "url" => "https://t.co/TcEE6NS8nD",
                        "entities" => [
                            "url" => [
                                "urls" => [
                                    [
                                        "url" => "https://t.co/TcEE6NS8nD",
                                        "expanded_url" => "http://www.nasa.gov",
                                        "display_url" => "nasa.gov",
                                        "indices" => [
                                            0,
                                            23
                                        ]
                                    ]
                                ]
                            ],
                            "description" => [
                                "urls" => [
                                ]
                            ]
                        ],
                        "protected" => false,
                        "followers_count" => 28605561,
                        "friends_count" => 270,
                        "listed_count" => 90405,
                        "created_at" => "Wed Dec 19 20:20:32 +0000 2007",
                        "favourites_count" => 2960,
                        "utc_offset" => -18000,
                        "time_zone" => "Eastern Time (US & Canada)",
                        "geo_enabled" => false,
                        "verified" => true,
                        "statuses_count" => 50713,
                        "lang" => "en",
                        "contributors_enabled" => false,
                        "is_translator" => false,
                        "is_translation_enabled" => false,
                        "profile_background_color" => "000000",
                        "profile_background_image_url" => "http://pbs.twimg.com/profile_background_images/590922434682880000/3byPYvqe.jpg",
                        "profile_background_image_url_https" => "https://pbs.twimg.com/profile_background_images/590922434682880000/3byPYvqe.jpg",
                        "profile_background_tile" => false,
                        "profile_image_url" => "http://pbs.twimg.com/profile_images/188302352/nasalogo_twitter_normal.jpg",
                        "profile_image_url_https" => "https://pbs.twimg.com/profile_images/188302352/nasalogo_twitter_normal.jpg",
                        "profile_banner_url" => "https://pbs.twimg.com/profile_banners/11348282/1518798395",
                        "profile_link_color" => "205BA7",
                        "profile_sidebar_border_color" => "000000",
                        "profile_sidebar_fill_color" => "F3F2F2",
                        "profile_text_color" => "000000",
                        "profile_use_background_image" => true,
                        "has_extended_profile" => true,
                        "default_profile" => false,
                        "default_profile_image" => false,
                        "following" => null,
                        "follow_request_sent" => null,
                        "notifications" => null,
                        "translator_type" => "regular"
                    ],
                    "geo" => null,
                    "coordinates" => null,
                    "place" => null,
                    "contributors" => null,
                    "is_quote_status" => false,
                    "retweet_count" => 729,
                    "favorite_count" => 2777,
                    "favorited" => false,
                    "retweeted" => false,
                    "possibly_sensitive" => false,
                    "lang" => "en"
                ],
                [
                    "created_at" => "Mon Feb 26 06:42:50 +0000 2018",
                    "id" => 968013469743288321,
                    "id_str" => "968013469743288321",
                    "text" => "宇宙ステーションでも、日本と9時間の時差で月曜日が始まりました。n今週は6人から3人にクルーのサイズダウンがありますが、しっかりと任されているタスクをこなしたいと思います。nn写真は、NASAの実験施設「ディスティニー」のグローブ… https://t.co/2CYoPV6Aqx",
                    "truncated" => true,
                    "entities" => [
                        "hashtags" => [
                        ],
                        "symbols" => [
                        ],
                        "user_mentions" => [
                        ],
                        "urls" => [
                            [
                                "url" => "https://t.co/2CYoPV6Aqx",
                                "expanded_url" => "https://twitter.com/i/web/status/968013469743288321",
                                "display_url" => "twitter.com/i/web/status/9…",
                                "indices" => [
                                    117,
                                    140
                                ]
                            ]
                        ]
                    ],
                    "metadata" => [
                        "result_type" => "popular",
                        "iso_language_code" => "ja"
                    ],
                    "source" => "<a href=\"https: //www.sprinklr.com\" rel=\"nofollow\">Sprinklr</a>",
                    "in_reply_to_status_id" => null,
                    "in_reply_to_status_id_str" => null,
                    "in_reply_to_user_id" => null,
                    "in_reply_to_user_id_str" => null,
                    "in_reply_to_screen_name" => null,
                    "user" => [
                        "id" => 842625693733203968,
                        "id_str" => "842625693733203968",
                        "name" => "金井 宣茂",
                        "screen_name" => "Astro_Kanai",
                        "location" => "",
                        "description" => "宇宙飛行士。2017年12月19日から国際宇宙ステーションに長期滞在中。 応援いただいているフォロワーのみなさまと一緒に、宇宙滞在を楽しみたいと思います！",
                        "url" => "https://t.co/rWU6cxY9iL",
                        "entities" => [
                            "url" => [
                                "urls" => [
                                    [
                                        "url" => "https://t.co/rWU6cxY9iL",
                                        "expanded_url" => "https://ameblo.jp/astro-kanai/",
                                        "display_url" => "ameblo.jp/astro-kanai/",
                                        "indices" => [
                                            0,
                                            23
                                        ]
                                    ]
                                ]
                            ],
                            "description" => [
                                "urls" => [
                                ]
                            ]
                        ],
                        "protected" => false,
                        "followers_count" => 51512,
                        "friends_count" => 59,
                        "listed_count" => 655,
                        "created_at" => "Fri Mar 17 06:36:35 +0000 2017",
                        "favourites_count" => 7075,
                        "utc_offset" => 32400,
                        "time_zone" => "Tokyo",
                        "geo_enabled" => false,
                        "verified" => true,
                        "statuses_count" => 1035,
                        "lang" => "ja",
                        "contributors_enabled" => false,
                        "is_translator" => false,
                        "is_translation_enabled" => false,
                        "profile_background_color" => "000000",
                        "profile_background_image_url" => "http://abs.twimg.com/images/themes/theme1/bg.png",
                        "profile_background_image_url_https" => "https://abs.twimg.com/images/themes/theme1/bg.png",
                        "profile_background_tile" => false,
                        "profile_image_url" => "http://pbs.twimg.com/profile_images/879071738625232901/u0nlrr4Y_normal.jpg",
                        "profile_image_url_https" => "https://pbs.twimg.com/profile_images/879071738625232901/u0nlrr4Y_normal.jpg",
                        "profile_banner_url" => "https://pbs.twimg.com/profile_banners/842625693733203968/1492509582",
                        "profile_link_color" => "E81C4F",
                        "profile_sidebar_border_color" => "000000",
                        "profile_sidebar_fill_color" => "000000",
                        "profile_text_color" => "000000",
                        "profile_use_background_image" => false,
                        "has_extended_profile" => true,
                        "default_profile" => false,
                        "default_profile_image" => false,
                        "following" => null,
                        "follow_request_sent" => null,
                        "notifications" => null,
                        "translator_type" => "none"
                    ],
                    "geo" => null,
                    "coordinates" => null,
                    "place" => null,
                    "contributors" => null,
                    "is_quote_status" => false,
                    "retweet_count" => 226,
                    "favorite_count" => 1356,
                    "favorited" => false,
                    "retweeted" => false,
                    "possibly_sensitive" => false,
                    "lang" => "ja"
                ],
                [
                    "created_at" => "Mon Feb 26 01:07:05 +0000 2018",
                    "id" => 967928974960545793,
                    "id_str" => "967928974960545793",
                    "text" => "Congratulations to #Olympics athletes who won gold! Neutron stars like the one at the heart of the Crab Nebula may… https://t.co/vz4SnPupe2",
                    "truncated" => true,
                    "entities" => [
                        "hashtags" => [
                            [
                                "text" => "Olympics",
                                "indices" => [
                                    19,
                                    28
                                ]
                            ]
                        ],
                        "symbols" => [
                        ],
                        "user_mentions" => [
                        ],
                        "urls" => [
                            [
                                "url" => "https://t.co/vz4SnPupe2",
                                "expanded_url" => "https://twitter.com/i/web/status/967928974960545793",
                                "display_url" => "twitter.com/i/web/status/9…",
                                "indices" => [
                                    116,
                                    139
                                ]
                            ]
                        ]
                    ],
                    "metadata" => [
                        "result_type" => "popular",
                        "iso_language_code" => "en"
                    ],
                    "source" => "<a href=\"https: //www.sprinklr.com\" rel=\"nofollow\">Sprinklr</a>",
                    "in_reply_to_status_id" => null,
                    "in_reply_to_status_id_str" => null,
                    "in_reply_to_user_id" => null,
                    "in_reply_to_user_id_str" => null,
                    "in_reply_to_screen_name" => null,
                    "user" => [
                        "id" => 19802879,
                        "id_str" => "19802879",
                        "name" => "NASA JPL",
                        "screen_name" => "NASAJPL",
                        "location" => "Pasadena, Calif.",
                        "description" => "NASA Jet Propulsion Laboratory manages many of NASA's robotic missions exploring Earth, the solar system and our universe. Tweets from JPL's News Office.",
                        "url" => "http://t.co/gcM9d1YLUB",
                        "entities" => [
                            "url" => [
                                "urls" => [
                                    [
                                        "url" => "http://t.co/gcM9d1YLUB",
                                        "expanded_url" => "http://www.jpl.nasa.gov",
                                        "display_url" => "jpl.nasa.gov",
                                        "indices" => [
                                            0,
                                            22
                                        ]
                                    ]
                                ]
                            ],
                            "description" => [
                                "urls" => [
                                ]
                            ]
                        ],
                        "protected" => false,
                        "followers_count" => 2566921,
                        "friends_count" => 379,
                        "listed_count" => 15065,
                        "created_at" => "Sat Jan 31 03:19:43 +0000 2009",
                        "favourites_count" => 1281,
                        "utc_offset" => -32400,
                        "time_zone" => "Alaska",
                        "geo_enabled" => false,
                        "verified" => true,
                        "statuses_count" => 6328,
                        "lang" => "en",
                        "contributors_enabled" => false,
                        "is_translator" => false,
                        "is_translation_enabled" => false,
                        "profile_background_color" => "0B090B",
                        "profile_background_image_url" => "http://pbs.twimg.com/profile_background_images/8479565/twitter_jpl_bkg.009.jpg",
                        "profile_background_image_url_https" => "https://pbs.twimg.com/profile_background_images/8479565/twitter_jpl_bkg.009.jpg",
                        "profile_background_tile" => false,
                        "profile_image_url" => "http://pbs.twimg.com/profile_images/2305452633/lg0hov3l8g4msxbdwv48_normal.jpeg",
                        "profile_image_url_https" => "https://pbs.twimg.com/profile_images/2305452633/lg0hov3l8g4msxbdwv48_normal.jpeg",
                        "profile_banner_url" => "https://pbs.twimg.com/profile_banners/19802879/1398298134",
                        "profile_link_color" => "0D1787",
                        "profile_sidebar_border_color" => "100F0E",
                        "profile_sidebar_fill_color" => "74A6CD",
                        "profile_text_color" => "0C0C0D",
                        "profile_use_background_image" => true,
                        "has_extended_profile" => false,
                        "default_profile" => false,
                        "default_profile_image" => false,
                        "following" => null,
                        "follow_request_sent" => null,
                        "notifications" => null,
                        "translator_type" => "none"
                    ],
                    "geo" => null,
                    "coordinates" => null,
                    "place" => null,
                    "contributors" => null,
                    "is_quote_status" => false,
                    "retweet_count" => 325,
                    "favorite_count" => 1280,
                    "favorited" => false,
                    "retweeted" => false,
                    "possibly_sensitive" => false,
                    "lang" => "en"
                ]
            ],
            "search_metadata" => [
                "completed_in" => 0.057,
                "max_id" => 0,
                "max_id_str" => "0",
                "next_results" => "?max_id=967574182522482687&q=nasa&include_entities=1&result_type=popular",
                "query" => "nasa",
                "count" => 3,
                "since_id" => 0,
                "since_id_str" => "0"
            ]
        ];
    }
}


