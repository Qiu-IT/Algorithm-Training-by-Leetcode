var merge = function(nums1, m, nums2, n) {

    nums1.splice(m,m+n);
    // console.log(nums1);
    /*
    for (let i=0; i<n;i++){
      nums1.push(nums2[i]);
                        }
                        */
    nums1.push.apply(nums1,nums2);
    nums1.sort(function(a,b){return a-b});   
        
     // return nums1;
};
