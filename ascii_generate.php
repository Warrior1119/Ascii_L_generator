// you can write to stderr for debugging purposes, e.g.
// fprintf(STDERR, "this is a debug message\n");

function solution($N) {
    // write your code in PHP7.0
    $i = 0;
    while ($i < $N) {
        if ($i == $N - 1) {
            for ($k = 0; $k < $N; $k++) {
                print "L";
            }
        } else {
            print "L\n";
        }
        $i++;
    }
    
}
