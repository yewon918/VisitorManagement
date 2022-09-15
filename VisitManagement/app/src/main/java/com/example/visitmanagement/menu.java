package com.example.visitmanagement;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.widget.Button;

public class menu extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_menu);
        //회원 로그인버튼 클릭시
        Button mypage_btn= findViewById(R.id.btn_mypage);
        //비회원 로그인 클릭시
        Button resrevation_btn= findViewById(R.id.btn_reservation);
        resrevation_btn.setOnClickListener(view -> {
            Intent intent=new Intent(getApplicationContext(),reservations.class);
            startActivity(intent);
        });

    }}