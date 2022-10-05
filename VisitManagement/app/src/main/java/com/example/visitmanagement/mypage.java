package com.example.visitmanagement;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;

public class mypage extends AppCompatActivity {
    TextView my_id, my_belong, my_phone;
    ImageView imageView;
    Button btn_history;

    //데이터 받아올 php주소
    String url = "http://172.200.110.113:80/android/data.php";
    // PHP를 읽어올때 사용할 변수


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_mypage);
    }
}