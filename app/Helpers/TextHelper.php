<?php


namespace App\Helpers;

class TextHelper
{
    public static function limitWords($text, $limit) {
        // Memastikan bahwa tag HTML yang terbuka dihitung sebagai satu kata
        $wordCount = str_word_count(strip_tags($text), 0);

        if ($wordCount <= $limit) {
            // Jika jumlah kata dalam teks kurang dari atau sama dengan batas, kembalikan teks asli
            return $text;
        } else {
            // Jika jumlah kata dalam teks melebihi batas, potong teks sesuai batas
            // Simpan tag HTML yang ditutup di dalam array
            preg_match_all('/<(\/)?([a-zA-Z]*)(\s[a-zA-Z]*=[^>]*)?(\s)*(\/)?>/', $text, $matches, PREG_SET_ORDER);
            $tags = [];
            foreach ($matches as $match) {
                if (!empty($match[1])) {
                    // Jika tag HTML ditutup, hapus tag dari array
                    array_pop($tags);
                } else {
                    // Jika tag HTML terbuka, tambahkan tag ke dalam array
                    $tags[] = $match[0];
                }
            }

            // Potong teks menjadi array kata-kata
            $words = preg_split('/\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);

            // Hapus tag HTML dari array kata-kata
            $textWithoutTags = strip_tags($text);

            // Potong teks sesuai batas jumlah kata
            $shortenedText = implode(' ', array_slice($words, 0, $limit));

            // Cek apakah teks terpotong di dalam tag HTML terbuka
            $shortenedTextWithTags = '';
            $tagDepth = count($tags);
            for ($i = 0; $i < $tagDepth; $i++) {
                $shortenedTextWithTags .= array_shift($tags);
            }

            // Gabungkan teks terpotong dengan tag HTML yang tertutup kembali
            $shortenedTextWithTags .= $shortenedText;

            // Gabungkan teks dengan tag HTML yang tertutup yang tersisa
            foreach ($tags as $tag) {
                $shortenedTextWithTags .= $tag;
            }

            // Tambahkan titik-tiga jika teks dipotong
            if (strlen($textWithoutTags) > strlen($shortenedText)) {
                $shortenedTextWithTags .= '...';
            }

            return $shortenedTextWithTags;
        }
    }
}



