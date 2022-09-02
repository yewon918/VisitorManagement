package com.example.visitmanagement;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

    //회원 로그인버튼 클릭시
        Button login_btn= findViewById(R.id.btn_login_user);
        login_btn.setOnClickListener(view -> {
            Intent intent=new Intent(getApplicationContext(), LoginActivity.class);
            startActivity(intent);
        });

    //비회원 로그인 클릭시
        Button customer_login_btn= findViewById(R.id.btn_login_nuser);
        customer_login_btn.setOnClickListener(view -> {
            Intent intent=new Intent(getApplicationContext(),customer_login.class);
            startActivity(intent);
        });

    }
}