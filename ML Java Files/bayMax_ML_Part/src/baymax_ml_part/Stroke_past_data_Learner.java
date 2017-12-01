/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package baymax_ml_part;

import java.util.ArrayList;

/**
 *
 * @author Mabeesha
 */
public class Stroke_past_data_Learner 
{
    private final ArrayList<Double>[] past_data;//gender(female=0,male=1) , age(20-120) , SystolicBloodPressure(SBP)(70-190 mmHg) , DiastolicBloodPressure(DBP)(40-100 mmHg) , TreatmentForHypertension(No=0,Yes=1) , BMI(5-130) , HDL(1-100 mg/dL) , Triglyceride(1-1000 mg/dL) , Fasting Glucose Level (1-200 mg/dL), ParentalDiabetes (No=0,Yes=1) , DoctorsPrediction(No=0,Yes=1)
    private final int past_data_arraySize;
    
    private final ArrayList<Double>[] training_data;
    private final int training_data_arraySize;
    
    public double[] hypothesisParameters;//hypothesis parameters
    
    private final double alpha = 0.001;//alpha of gradient descent algorithm
    private final int m;//number of data
    
    private final double convergenceCheckingParameter = 0.001;
    
    public Stroke_past_data_Learner(ArrayList<Double>[] pastData,int arraySize)
    {
        this.past_data = pastData;
        this.past_data_arraySize = arraySize;
        
        training_data_arraySize = arraySize+1;                                         //If Input variable changes , change this!!!!
        training_data = (ArrayList<Double>[])new ArrayList[training_data_arraySize];   
        
        this.m = pastData[0].size();
        
        this.hypothesisParameters = new double[training_data_arraySize-1];
        learn();
    }
    
    private void learn()
    {
        ////Algorithm - Gradient descent(alpha  = 0.001)////
        double[] temp_parameters = new double[training_data_arraySize-1];                                //temperary array is needed because in the algo values must updated simultaniously.
        System.arraycopy(hypothesisParameters, 0, temp_parameters, 0, training_data_arraySize-1);             //copies the array 
        makeTrainingDataSet();
        
        boolean isConverged = false;
        while(!isConverged)                                                                                     //repeat untill convergence
        {
            double errorSum;                                                                            //sum part of the algorithm
            for(int i=0;i<training_data_arraySize-1;i++)                                                      //updating theta values
            {
                errorSum = 0;
                for(int j=0;j<m;j++)                                                                    //calculating errorSum
                {
                    double z = 0;
                    for( int k = 0 ; k < training_data_arraySize-1 ; k++ )                                  //calculatingg z
                    {
                        z = z + hypothesisParameters[k]*training_data[k].get(j);
                    }
                    errorSum = errorSum +( ( 1.0 / (1.0 + Math.exp(-z)) ) - training_data[training_data_arraySize-1].get(j) ) * training_data[i].get(j);
                }               
                temp_parameters[i] = hypothesisParameters[i] - (alpha/m)*errorSum;
                
            }
            isConverged = convergenceCheck(temp_parameters);
            System.arraycopy(hypothesisParameters, 0, temp_parameters, 0, training_data_arraySize-1);
        }
        System.out.println("Diavetes past data learning finished, algorith :- gradien descent");
    }

    private void makeTrainingDataSet() 
    {
        for(int i = 0; i < training_data_arraySize ; i++)
        {
            for(int j = 0; j < m ; j++)
            {
                if(i==0)training_data[i].add(1.0);
                else
                {
                    training_data[i].add(past_data[i-1].get(j));
                }
            }
        }
        
    }

    private boolean convergenceCheck(double[] temp_parameters) 
    {
        for(int i = 0 ; i < training_data_arraySize-1 ; i++ )
        {
            if((hypothesisParameters[i] - temp_parameters[i])*(hypothesisParameters[i] - temp_parameters[i]) > convergenceCheckingParameter*convergenceCheckingParameter)return false;
        }
        return true;
    }     
}
